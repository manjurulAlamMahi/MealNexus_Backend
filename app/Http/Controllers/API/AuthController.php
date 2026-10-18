<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Mail\PasswordResetMail;
use App\Models\AddUserMeal;
use App\Models\MealPlan;
use App\Models\User;
use App\Models\UserFavoriteMeal;
use App\Rules\PasswordRule;
use App\Services\OtpService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use PHPOpenSourceSaver\JWTAuth\JWTGuard;

class AuthController extends BaseController
{
    protected $otpService;

    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    /**
     * Get the guard to be used to retrieve the user
     */
    private function jwtGuard(): JWTGuard
    {
        /** @var JWTGuard $guard */
        $guard = auth('api');

        return $guard;
    }

    /** Register a User.
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            // Get all validation errors
            $errors = $validator->errors()->toArray();

            // Dynamically set the message based on the first error field
            $firstErrorField = key($errors);
            $dynamicMessage  = ucfirst($firstErrorField) . ' field is required.';

            // Prepare error messages
            $errorMessages = [];
            foreach ($errors as $field => $messages) {
                foreach ($messages as $message) {
                    $errorMessages[] = ucfirst($field) . ': ' . $message; // Add dynamic error messages
                }
            }

            return jsonErrorResponse($dynamicMessage, 422, $errorMessages);
        }

        // Create the user
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ✅ Generate JWT token for the newly registered user
        $token = $this->jwtGuard()->login($user);

        return jsonResponse(true, 'Registration successfully done', 201, [
            'user'          => [
                'id'     => $user->id,
                'name'   => $user->name,
                'email'  => $user->email,
                'avatar' => $user->avatar,
                'phone'  => $user->phone,
            ],
            'authorisation' => [
                'token'      => $token,
                'token_type' => 'bearer',
            ],
        ]);
    }

    /** Get a JWT via given credentials.
     * @return \Illuminate\Http\JsonResponse */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            // Get all validation errors
            $errors = $validator->errors()->toArray();

            // Dynamically set the message based on the first error field
            $firstErrorField = key($errors);
            $dynamicMessage  = ucfirst($firstErrorField) . ' field is required.';

            // Prepare error messages
            $errorMessages = [];
            foreach ($errors as $field => $messages) {
                foreach ($messages as $message) {
                    $errorMessages[] = ucfirst($field) . ': ' . $message; // Add dynamic error messages
                }
            }

            return jsonErrorResponse($dynamicMessage, 422, $errorMessages);
        }

        $credentials = $request->only('email', 'password');

        if (! $token = $this->jwtGuard()->attempt($credentials)) {
            return jsonErrorResponse('Invalid or Mismatch credentials', 401);
        }

        $token = $this->respondWithToken($token);

        // Return successful login response with user details and token
        return jsonResponse(true, 'Login Successfully', 200, [
            'user'          => [
                'id'     => $this->jwtGuard()->user()->id,
                'name'   => $this->jwtGuard()->user()->name,
                'email'  => $this->jwtGuard()->user()->email,
                'role'   => $this->jwtGuard()->user()->role,
                'avatar' => $this->jwtGuard()->user()->avatar,
                'phone'  => $this->jwtGuard()->user()->phone,
            ],
            'authorisation' => [
                'token' => $token,
            ],
        ]);
    }

    /** Get the authenticated User.
     * @return \Illuminate\Http\JsonResponse */
    public function profile()
    {
        $success = $this->jwtGuard()->user();

        return $this->sendResponse($success, 'Refresh token return successfully.');
    }

    /** Log the user out (Invalidate the token).
     * @return \Illuminate\Http\JsonResponse */
    public function logout()
    {
        $user = $this->jwtGuard()->user();
        $this->jwtGuard()->logout();
        return jsonResponse(true, 'Successfully logged out', 200, [
            'user name' => $user->name,
        ]);
    }

    /** Refresh a token.
     * @return \Illuminate\Http\JsonResponse */
    public function refresh()
    {
        $success = $this->respondWithToken($this->jwtGuard()->refresh());

        return jsonResponse(true, 'New token generated', 200, [
            'user'          => [
                'id'    => $this->jwtGuard()->user()->id,
                'name'  => $this->jwtGuard()->user()->name,
                'email' => $this->jwtGuard()->user()->email,
            ],
            'authorisation' => [
                'token' => $success['access_token'],
            ],
        ]);
    }

    /** Get the token array structure.
     * @param  string $token
     * @return \Illuminate\Http\JsonResponse */
    protected function respondWithToken($token)
    {
        return [
            'access_token' => $token,
            'token_type'   => 'bearer',
            // 'expires_in' => auth('api')->factory()->getTTL() * 60
        ];
    }

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return jsonErrorResponse('Forgot Password Validation failed', 422, $validator->errors()->toArray());
        }

        // Find user by email
        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return jsonErrorResponse('No user found with this email address.', 404);
        }

        // Generate a 6-digit reset token
        $otp = $this->otpService->generateOtp($request->email);

        // Store the token and expiry time in the database
        $user->password_reset_otp             = $otp;
        $user->password_reset_otp_is_verified = false;
        $user->password_reset_otp_expiry      = now()->addMinutes(5); // Token expires after 5 minutes
        $user->save();

        // Send token to the user's email (using Queue)
        Mail::to($user->email)->queue(new PasswordResetMail($otp));

        return jsonResponse(true, 'Password reset OTP has been sent to your email.', 200, []);
    }

    public function verifyOtp(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'otp'   => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return jsonErrorResponse('Profile Update Validation failed', 422, $validator->errors()->toArray());
        }

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return jsonErrorResponse('No user found with this email address.', 404);
        }

        // Check if the OTP matches
        if ($user->password_reset_otp !== removeSpaces($request->otp)) {
            return jsonErrorResponse('Invalid OTP.', 400);
        }

        if (! $user->password_reset_otp) {
            return jsonErrorResponse('Unauthorizied OTP.', 401);
        }

        // Check if the OTP has expired
        if ($user->password_reset_otp_expiry < now()) {
            return jsonErrorResponse('OTP has expired.', 400);
        }

        $user->password_reset_otp_is_verified = true;
        $user->password_reset_otp_expiry      = now()->addMinutes(5);
        $user->save();
        // OTP is valid, proceed to allow password reset
        return jsonResponse(true, 'OTP verified successfully. You can now reset your password with in the next 5 mins.', 200);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => ['required', 'string', 'confirmed', new PasswordRule],
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return jsonErrorResponse('Profile Update Validation failed', 422, $validator->errors()->toArray());
        }

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return jsonErrorResponse('No user found with this email address.', 404);
        }
        if (! $user->password_reset_otp_is_verified) {
            return jsonErrorResponse('Unauthorized attempt.', 401);
        }
        // Check if OTP verification is done
        if ($user->password_reset_otp === null || $user->password_reset_otp_expiry < now()) {
            $user->password_reset_otp_is_verified = false;
            $user->save();
            return jsonErrorResponse('OTP verification failed or expired. Please request a new OTP.', 400);
        }

                                                                                // If OTP is verified and not expired, proceed with password reset
        $user->password                       = Hash::make($request->password); // Hash the new password
        $user->password_reset_otp             = null;                           // Clear the otp after password reset
        $user->password_reset_otp_expiry      = null;                           // Clear the expiry
        $user->password_reset_otp_is_verified = false;
        $user->save();

        return jsonResponse(true, 'Password has been successfully reset.', 200);
    }

    public function resendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return jsonErrorResponse('Profile Update Validation failed', 422, $validator->errors()->toArray());
        }

        // Find user by email
        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return jsonErrorResponse('No user found with this email address.', 404);
        }

        // Generate a new 6-digit reset token
        $otp = $this->otpService->generateOtp($request->email);

        // Store the new token and set expiry time
        $user->password_reset_otp             = $otp;
        $user->password_reset_otp_is_verified = false;
        $user->password_reset_otp_expiry      = now()->addMinutes(5); // Token expires after 5 minutes
        $user->save();

        // Send the new token to the user's email
        Mail::to($user->email)->queue(new PasswordResetMail($otp));
        // $this->otpService->sendOtpEmail($request->email, $otp);

        return jsonResponse(true, 'A new password reset OTP has been sent to your email.', 200, []);
    }

    public function profileRetrieval(Request $request)
    {
        try {
            /** @var User $user */
            $user               = $this->jwtGuard()->user();
            $favoriteMealsTotal = UserFavoriteMeal::where('user_id', $user->id)->count();
            $mealPlansTotal     = MealPlan::where('user_id', $user->id)->count();
            $recipesTestsTotal  = AddUserMeal::where('user_id', $user->id)->count();

            $profileData = $user->only([
                'id',
                'name',
                'email',
                'avatar',
                'created_at',
            ]);

            $profileData['favorite_meals_total'] = $favoriteMealsTotal;
            $profileData['meal_plans_total']     = $mealPlansTotal;
            $profileData['recipes_tests_total']  = $recipesTestsTotal;

            return jsonResponse(
                true,
                'User profile retrieved successfully !!!',
                200,
                $profileData
            );
        } catch (Exception $e) {
            return jsonErrorResponse('Failed to retrieve user profile.', 500);
        }
    }

    public function ProfileUpdate(Request $request)
    {
        $authenticatedUser = User::find($this->jwtGuard()->user()->id);

        // Validation
        $validator = Validator::make($request->all(), [
            'name'    => 'sometimes|nullable|string|max:255',
            'email'   => 'sometimes|nullable|email|max:255|unique:users,email,' . $authenticatedUser->id,
            'avatar'  => 'sometimes|nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'address' => 'sometimes|nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return jsonErrorResponse(
                'Profile Update Validation failed',
                422,
                $validator->errors()->toArray()
            );
        }

        // Update only the fields that exist in request
        if ($request->filled('name')) {
            $authenticatedUser->name = $request->name;
        }

        if ($request->filled('email')) {
            $authenticatedUser->email = $request->email;
        }

        if ($request->filled('address')) {
            $authenticatedUser->address = $request->address;
        }

        // Avatar handle
        if ($request->hasFile('avatar')) {
            if ($authenticatedUser->avatar) {
                fileDelete(public_path($authenticatedUser->avatar));
            }

            $avatar                    = $request->file('avatar');
            $avatarName                = $authenticatedUser->id . '_avatar';
            $avatarPath                = fileUpload_old($avatar, 'profile/avatar', $avatarName);
            $authenticatedUser->avatar = $avatarPath;
        }

        $authenticatedUser->save();

        return jsonResponse(
            true,
            'Profile updated successfully',
            200,
            $authenticatedUser->only(['name', 'email', 'avatar', 'address'])
        );
    }

    public function ChangePassword(Request $request)
    {
        // Create custom validator using Validator facade
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string',
            'password'     => 'required|string|confirmed|min:8',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return jsonErrorResponse('Profile Update Validation failed', 422, $validator->errors()->toArray());
        }

        // Authenticate the user using JWT
        // $user = JWTAuth::parseToken()->authenticate();
        /** @var User|null $user */
        $user = $this->jwtGuard()->user();

        if (! $user) {
            return jsonErrorResponse('User not found or unauthorized', 401);
        }

        // Check if the old password matches the current password
        if (! Hash::check($request->old_password, $user->password)) {
            return jsonErrorResponse('Old password is incorrect', 400);
        }

        // Hash the new password and save it to the database
        $user->password = Hash::make($request->password);
        $user->save();

        return jsonResponse(true, 'Password changed successfully', 200, $user->only(['name', 'email', 'avatar']));
    }

    // This method need for app publications
    public function appAccountDelete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'nullable|string',
            'email'    => 'required|email',
            'password' => 'required|string',
            'reason'   => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return jsonErrorResponse('Validation failed', 422, $validator->errors()->toArray());
        }

        // Find user by email
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return jsonErrorResponse('Email or Password is incorrect', 400);
        }

        // Delete user account
        // $user->delete();
        // Hard delete the user
        $user->forceDelete();

        return jsonResponse(true, 'Profile deleted successfully', 200, []);
    }
}

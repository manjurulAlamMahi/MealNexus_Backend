<?php
namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DeleteUserFormController extends Controller
{

/**
 * Show the form for deleting a user.
 * @return \Illuminate\View\View
 */
    public function create()
    {
        return view('frontend.delete-form');
    }

    /**
     * Handle the form submission to delete a user.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        // Find the user by email
        $user = User::where('email', $validated['email'])->first();

        // If user not found, return error
        if (! $user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        // Check if the entered password matches the user's password
        if (Hash::check($validated['password'], $user->password)) {
            // If the password matches, delete the user
            $user->delete();
            return back()->with('success', 'User deleted successfully');
        }

        // If password doesn't match
        return back()->with('error', 'Incorrect password');
    }
}

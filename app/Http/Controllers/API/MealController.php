<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MealDetailsResource;
use App\Http\Resources\MealResource;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MealController extends Controller
{
    /**
     * Retrieve meals with optional filters and pagination.
     *
     * Query params:
     * - meal_type: lunch|dinner|breakfast (optional)
     * - per_page: 1-100 (optional, default 10)
     * - page: >=1 (optional)
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'meal_type' => 'nullable|in:lunch,dinner,breakfast',
            'per_page'  => 'nullable|integer|min:1|max:100',
            'page'      => 'nullable|integer|min:1',
        ]);

        if ($validator->fails()) {
            return jsonErrorResponse('Validation failed', 422, $validator->errors()->toArray());
        }

        try {
            $perPage = (int) $request->input('per_page', 10);
            $userId = $this->resolveAuthUserId();

            $query = Meal::query()
                ->where('status', 'active')
                ->latest();

            if ($request->filled('meal_type')) {
                $query->where('meal_type', $request->meal_type);
            }

            if ($userId) {
                $this->applyUserFlags($query, $userId);
            }

            $meals = $query->paginate($perPage)->withQueryString();

            $formattedMeals = MealResource::collection($meals->items())
                ->collection
                ->map(fn($meal) => $meal->toArray($request))
                ->values();

            return jsonResponse(
                true,
                'Meals retrieved successfully',
                200,
                $formattedMeals,
                true,
                $meals
            );
        } catch (\Exception $e) {
            return jsonErrorResponse(
                'Something went wrong while retrieving meals',
                500,
                [$e->getMessage()]
            );
        }
    }

    /**
     * Retrieve a single active meal details by id.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id)
    {
        try {
            $meal = Meal::query()
                ->where('status', 'active')
                ->with([
                    'ingredients:id,meal_id,grocery_type_id,title,quantity',
                    'ingredients.groceryType:id,name',
                    'instructions:id,meal_id,title',
                ])
                ->find($id);

            if (! $meal) {
                return jsonErrorResponse('Meal not found', 404);
            }

            return jsonResponse(
                true,
                'Meal retrieved successfully',
                200,
                (new MealDetailsResource($meal))->toArray(request())
            );
        } catch (\Exception $e) {
            return jsonErrorResponse(
                'Something went wrong while retrieving meal',
                500,
                [$e->getMessage()]
            );
        }
    }

    /**
     * Search active meals by title with optional pagination.
     *
     * Query params:
     * - title: search keyword (required)
     * - per_page: 1-100 (optional, default 10)
     * - page: >=1 (optional)
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'    => 'required|string|min:1|max:255',
            'per_page' => 'nullable|integer|min:1|max:100',
            'page'     => 'nullable|integer|min:1',
        ]);

        if ($validator->fails()) {
            return jsonErrorResponse('Validation failed', 422, $validator->errors()->toArray());
        }

        try {
            $perPage = (int) $request->input('per_page', 10);
            $title   = trim($request->input('title'));
            $userId  = $this->resolveAuthUserId();

            $query = Meal::query()
                ->where('status', 'active')
                ->where('title', 'like', '%' . $title . '%')
                ->latest();

            if ($userId) {
                $this->applyUserFlags($query, $userId);
            }

            $meals = $query->paginate($perPage)->withQueryString();

            $formattedMeals = MealResource::collection($meals->items())
                ->collection
                ->map(fn($meal) => $meal->toArray($request))
                ->values();

            return jsonResponse(
                true,
                'Meals retrieved successfully',
                200,
                $formattedMeals,
                true,
                $meals
            );
        } catch (\Exception $e) {
            return jsonErrorResponse(
                'Something went wrong while searching meals',
                500,
                [$e->getMessage()]
            );
        }
    }

    /**
     * Resolve authenticated API user id if token is present and valid.
     *
     * @return int|null
     */
    private function resolveAuthUserId(): ?int
    {
        try {
            return auth('api')->user()?->id;
        } catch (\Throwable $e) {
            return null;
        }
    }

    /**
     * Add authenticated-user specific flags to meal query.
     */
    private function applyUserFlags(Builder $query, int $userId): void
    {
        $query->withExists([
            'addUserMeals as added_meal' => function (Builder $q) use ($userId) {
                $q->where('user_id', $userId);
            },
            'favoritedByUsers as is_favourite' => function (Builder $q) use ($userId) {
                $q->where('user_favorite_meals.user_id', $userId);
            },
        ]);
    }

}

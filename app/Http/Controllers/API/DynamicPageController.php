<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FaqResource;
use App\Http\Resources\PageResource;
use App\Models\Faq;
use App\Models\Page;

class DynamicPageController extends Controller
{
    /**
     * Retrieve all dynamic pages.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $dynamicPage = Page::where('status', 'active')->latest()->get();

            return jsonResponse(
                true,
                'DynamicPage retrieved successfully',
                200,
                PageResource::collection($dynamicPage)
            );
        } catch (\Exception $e) {
            return jsonErrorResponse(
                'Something went wrong while retrieving Dynamic Page',
                500,
                [$e->getMessage()]
            );
        }
    }

    public function faq()
    {
        try {
            $faq = Faq::where('status', 'active')->latest()->get();

            return jsonResponse(
                true,
                'FAQ retrieved successfully',
                200,
                FaqResource::collection($faq)
            );
        } catch (\Exception $e) {
            return jsonErrorResponse(
                'Something went wrong while retrieving FAQ',
                500,
                [$e->getMessage()]
            );
        }
    }
}

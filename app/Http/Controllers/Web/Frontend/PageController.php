<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Show the Privacy Policy page (static).
     *
     * @return \Illuminate\View\View
     */
    public function privacy(): View
    {
        return view('frontend.privacy');
    }

    /**
     * Show the Terms & Conditions page (static).
     *
     * @return \Illuminate\View\View
     */
    public function terms(): View
    {
        return view('frontend.terms');
    }

    /**
     * Show the Contact Us page (static).
     *
     * @return \Illuminate\View\View
     */
    public function contact(): View
    {
        return view('frontend.contact');
    }
}

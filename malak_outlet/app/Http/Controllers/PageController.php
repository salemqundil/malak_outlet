<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        // Return the 'About Us' page view
        return view('about');
    }

    public function offers()
    {
        // Return the 'Offers' page view
        return view('offers');
    }

    public function privacy()
    {
        // Return the 'Privacy Policy' page view
        return view('privacy');
    }

    public function terms()
    {
        // Return the 'Terms of Service' page view
        return view('terms');
    }

    public function returns()
    {
        // Return the 'Returns Policy' page view
        return view('returns');
    }

    public function faq()
    {
        // Return the 'FAQ' page view
        return view('faq');
    }
}

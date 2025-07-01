<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        // Fetch and return the user's wishlist
        return view('wishlist.index');
    }
}

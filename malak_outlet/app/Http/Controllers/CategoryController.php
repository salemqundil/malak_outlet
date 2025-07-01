<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch and return a list of categories
        return view('categories.index');
    }

    public function show($id)
    {
        // Fetch and return a single category by ID
        return view('categories.show', ['id' => $id]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured products
        $featuredProducts = Product::where('is_featured', true)
            ->where('is_active', true)
            ->with(['category', 'brand', 'images'])
            ->limit(8)
            ->get();

        // Get active categories
        $categories = Category::where('is_active', true)
            ->limit(8)
            ->get();

        // Get latest products
        $latestProducts = Product::where('is_active', true)
            ->with(['category', 'brand', 'images'])
            ->latest()
            ->limit(4)
            ->get();

        // Get sale products
        $saleProducts = Product::where('is_active', true)
            ->whereNotNull('sale_price')
            ->with(['category', 'brand', 'images'])
            ->limit(4)
            ->get();

        return view('home', compact('featuredProducts', 'categories', 'latestProducts', 'saleProducts'));
    }
}

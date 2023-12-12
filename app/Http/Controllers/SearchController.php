<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Lakukan pencarian di model Product
        $products = Product::where('nama', 'LIKE', "%$query%")
            ->orWhere('spesifikasi', 'LIKE', "%$query%")
            ->get();

        // Lakukan pencarian di model Category
        $categories = Category::where('nama', 'LIKE', "%$query%")
            ->orWhere('deskripsi', 'LIKE', "%$query%")
            ->get();

        return view('homepage.search-results', compact('products', 'categories'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $products = Product::take(3)->get();

        return view('homepage.homepage', compact('products'));
        // return $products;
    }
    public function about(){
        return view('homepage.about');
    }

    public function category(){
        $categories = Category::all();
        return view('homepage.catalogue', compact('categories'));
    }

    public function productslist($id){
        $category = Category::find($id);

        return view('homepage.productlist', compact('category'));
    }

    public function product($id){
        $product = Product::find($id);

        return view('homepage.product', compact('product'));
        // return $product;
    }
}

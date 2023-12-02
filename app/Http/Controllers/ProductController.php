<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $error = NULL;
        return view('products.index', compact('products', 'error'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'nama' => 'required|max:255|unique:products',
                'about' => 'required|max:255',
                'spesifikasi' => 'required|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'category_id' => 'required|exists:categories,id',
            ]);
    
            $product = new Product();
            $product->nama = $request->nama;
            $product->about = $request->about;
            $product->spesifikasi = $request->spesifikasi;
            $path = $request->file('image')->storePublicly('product_image', 'public');
            $product->image = $path;
            $product->category_id = $request->category_id;
            $product->user_id = Auth::id();
            $product->save();
    
            $error = null;
            $products = Product::all();
            return view('products.index', compact('products', 'error'));
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            $products = Product::all();
            return view('products.index', compact('products', 'error'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view("products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $error = null;
        return view("products.edit", compact('product', 'error', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->validate($request, [
                'nama' => "required|max:255|unique:products,nama,$id",
                'about' => "required|max:255",
                'spesifikasi' => "required|max:255",
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'category_id' => 'required|exists:categories,id',
            ]);

            $product = Product::findOrFail($id);
            $product->nama = $request->nama;
            $product->about = $request->about;
            $product->spesifikasi = $request->spesifikasi;

            if ($request->hasFile('image')) {
                Storage::delete("public/" . $product->image);
                $path = $request->file('image')->storePublicly('product_image', 'public');
                $product->image = $path;
            }

            $product->category_id = $request->category_id;
            $product->user_id = Auth::id();
            $product->save();

            $error = null;
            $products = Product::all();
            return view('products.index', compact('products', 'error'));
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            $products = Product::all();
            return view('products.index', compact('products', 'error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            if ($product) {
                Storage::delete('public/' . $product->image);
                $product->delete();
            }
            return redirect('/product');
        } catch (\Exception $e) {
            $error = $e->getMessage();
            $products = Product::all();
            return view('products.index', compact('products', 'error'));
        }
    }

}

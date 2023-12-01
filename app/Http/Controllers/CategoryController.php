<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $error = NULL;
        return view('categories.index', compact('categories', 'error'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'nama' => "required|max:10|unique:categories",
                'deskripsi' => "required|max:200",
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $name = time() . '.' . $request->image->extension();
            $category = new Category();
            $category->nama = $request->nama;
            $category->deskripsi = $request->deskripsi;
            $path = $request->file('image')->storePublicly('category_image', 'public');
            $category->image = $path;
            $category->save();

            $error = NULL;
            $categories = Category::all();
            return view('categories.index', compact('categories', 'error'));
        } catch (\Illuminate\Validation\ValidationException $e) {

            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {

            $error = $e->getMessage();
            $categories = Category::all();
            return view('categories.index', compact('categories', 'error'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view("categories.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $error = null; // Atau dapat diisi dengan pesan kesalahan yang sesuai jika ada
        return view("categories.edit", compact('category', 'error'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->validate($request, [
                'nama' => "required|max:10|unique:categories,nama,$id",
                'deskripsi' => "required|max:200",
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $category = Category::findOrFail($id);
            $category->nama = $request->nama;
            $category->deskripsi = $request->deskripsi;

            if ($request->hasFile('image')) {
                Storage::delete("storage/".$category->image);
                $path = $request->file('image')->storePublicly('category_image', 'public');
                $category->image = $path;
            }

            $category->save();

            return redirect('/category');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return redirect()->back()->with('error', $error)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category) {
            Storage::delete('public/' . $category->image);
            $category->delete();
        }
        return redirect('/category');
    }
}

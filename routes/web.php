<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home.index');

Route::get('/dashboard', function () {
    $totalCategories = Category::count();
    $totalProducts = Product::count();
    return view('dashboard', compact('totalCategories', 'totalProducts'));
})->middleware(['auth', 'verified'])->name('dashboard');

route::resource('category', CategoryController::class)->middleware(['auth', 'verified']);
route::resource('product', ProductController::class)->middleware(['auth', 'verified']);
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', [PageController::class, 'about'])->name('home.about');
Route::get('/categories', [PageController::class, 'category'])->name('home.category');
Route::get('/productlist/{id}', [PageController::class, 'productslist'])->name('home.lists');
Route::get('/show/{id}', [PageController::class, 'product'])->name('home.products');
require __DIR__.'/auth.php';

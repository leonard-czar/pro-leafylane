<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('showcart');

// Route::get('/product', function () {
//     return view('product');
// })->name('showproduct');

// Route::get('/myaccount', function () {
//     return view('my-account');
// })->name('myaccount');

// Route::get('/shop', function () {
//     return view('shop');
// })->name('shop');

// Route::get('/checkout', function () {
//     return view('checkout');
// })->name('checkout');

// Route::get('/showdetail', function () {
//     return view('shop-detail');
// })->name('showdetail');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin auth
Route::get('/allcat', [App\Http\Controllers\ProductCategoryController::class, 'index'])->name('display-all-category');

Route::get('/addcategory', [App\Http\Controllers\ProductCategoryController::class, 'create'])->name('addcategory');

Route::post('/delete-category/{id}', [App\Http\Controllers\ProductCategoryController::class, 'delete'])->name('delete-cat');

Route::get('/update-category/{id}', [App\Http\Controllers\ProductCategoryController::class, 'update'])->name('update-cat');

Route::get('/cat', function () {
    return view('admin.add-category');
})->name('cat');

Route::get('/get-category/{id}', [App\Http\Controllers\ProductCategoryController::class, 'store'])->name('get-cat');

// product
Route::get('/addpro', [App\Http\Controllers\ProductCategoryController::class, 'get_categories'])->name('addpro');


Route::get('/allpro', [App\Http\Controllers\ProductController::class, 'index'])->name('display-all-product');

Route::any('/addproduct', [App\Http\Controllers\ProductController::class, 'create'])->name('addproduct');

// Route::post('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete-pro');
// Route::post('/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update-pro');

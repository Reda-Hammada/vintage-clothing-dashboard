<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admincontroller;
use App\Https\Controllers\LogoutController;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\Categorycontroller;



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



Auth::routes();
// Log out routes 
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');

// Dashboard pages routes 
Route::get('/', [Admincontroller::class, 'index'])->name('dashboard');
Route::get('/setting', [Admincontroller::class, 'setting'])->name('setting');
Route::get('/products',[Admincontroller::class, 'products'])->name('products');
Route::get('/categories',[Admincontroller::class, 'categories'])->name('categories');

//product CRUD routes 
Route::post('/createproduct', [ProductController::class, 'store'])->name('createproduct');


//category CRUD routes 
Route::post('/createcategory', [Categorycontroller::class, 'storeCategory'])->name('createcategory');
Route::get('/productscategory/{categoryName}', [Categorycontroller::class,'fetchProductsByCategoryName'])->name('productsByCategory');
Route::delete('/delete/{id}',[Categorycontroller::class ,'deleteCategory'])->name('category.delete');
Route::patch('/update/{id}',[Categorycontroller::class, 'updateCategory'])->name('category.update');
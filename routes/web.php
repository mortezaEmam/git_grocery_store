<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\LoginUserController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\BasketController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
Route::get('/logout',[LoginUserController::class,'destroy'])->name('logout');
Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::prefix('user')->group(function (){
    Route::get('/register',[UserController::class,'create'])->name('user.register');
    Route::post('/register',[UserController::class,'store'])->name('user.register');
    Route::get('/login',[LoginUserController::class,'create'])->name('user.login');
    Route::post('/login',[LoginUserController::class,'store'])->name('user.login');
});
Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
});






Route::prefix('admin')->group(function (){

    Route::get('/', [AdminController::class,'index'])->name('admin');


});
Route::prefix('category')->group(function (){
    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
    Route::get('{category}/show',[CategoryController::class,'show'])->name('category.show');
    Route::post('{category}/update',[CategoryController::class,'update'])->name('category.update');
    Route::get('{category}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');
});
Route::prefix('product')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name('product.index');
    Route::get('/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::get('{product}/show',[ProductController::class,'show'])->name('product.show');
    Route::get('{product}/edit',[ProductController::class,'edit'])->name('product.edit');
    Route::post('{product}/update',[ProductController::class,'update'])->name('product.update');
    Route::get('{product}/destroy',[ProductController::class,'destroy'])->name('product.destroy');
});
Route::prefix('orders')->group(function (){
    Route::get('/',[OrderController::class,'index'])->name('order.index');
    Route::get('/create',[OrderController::class,'create'])->name('order.create');
    Route::post('/store',[OrderController::class,'store'])->name('order.store');
    Route::get('{order}/show',[OrderController::class,'show'])->name('order.show');
    Route::get('{order}/edit',[OrderController::class,'edit'])->name('order.edit');
    Route::post('{order}/update',[OrderController::class,'update'])->name('order.update');
    Route::get('{order}/destroy',[OrderController::class,'destroy'])->name('order.destroy');
});
Route::prefix('baskets')->group(function (){
    Route::get('/',[BasketController::class,'index'])->name('basket.index');
    Route::get('/create',[BasketController::class,'create'])->name('basket.create');
    Route::post('/store/{productId}',[BasketController::class,'store'])->name('basket.store');
    Route::get('{basket}/show',[BasketController::class,'show'])->name('basket.show');
    Route::get('{basket}/edit',[BasketController::class,'edit'])->name('basket.edit');
    Route::post('/update/{basket}',[BasketController::class,'update'])->name('basket.update');
    Route::post('/destroy/{basket}',[BasketController::class,'destroy'])->name('basket.destroy');
});

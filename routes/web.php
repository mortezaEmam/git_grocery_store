<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\BasketController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\TranscationController;
use \App\Http\Controllers\RoleController;
use App\Http\Controllers\WareHousController;
use \App\Http\Controllers\Auth\AuthenticatedSessionController;
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
//})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::prefix('roles')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('role.index');
    Route::get('/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/store', [RoleController::class, 'store'])->name('role.store');
    Route::post('{role}/update', [RoleController::class, 'update'])->name('role.update');
    Route::get('/edit/{role}', [RoleController::class, 'edit'])->name('role.edit');
    Route::get('/destroy/{role}', [RoleController::class, 'destroy'])->name('role.destroy');
});



Route::get('/admin', [AdminController::class,'index'])->middleware(['auth'])->name('admin');
Route::prefix('warehouse')->middleware(['auth'])->group(function (){
    Route::get('/',[WareHousController::class,'index'])->name('warehouse.index');
    Route::get('/create',[WareHousController::class,'create'])->name('warehouse.create');
    Route::post('/store',[WareHousController::class,'store'])->name('warehouse.store');
    Route::get('{warehouse}/edit',[WareHousController::class,'edit'])->name('warehouse.edit');
    Route::get('{warehouse}/show',[WareHousController::class,'show'])->name('category.show');
    Route::post('{warehouse}/update',[WareHousController::class,'update'])->name('warehouse.update');
    Route::get('{warehouse}/destroy',[WareHousController::class,'destroy'])->name('warehouse.destroy');
});
Route::prefix('category')->middleware(['auth'])->group(function (){
    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
    Route::get('{category}/show',[CategoryController::class,'show'])->name('category.show');
    Route::post('{category}/update',[CategoryController::class,'update'])->name('category.update');
    Route::get('{category}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');
});
Route::prefix('product')->middleware(['auth'])->group(function (){
    Route::get('/',[ProductController::class,'index'])->name('product.index');
    Route::get('/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::get('{product}/show',[ProductController::class,'show'])->name('product.show');
    Route::get('{product}/edit',[ProductController::class,'edit'])->name('product.edit');
    Route::post('{product}/update',[ProductController::class,'update'])->name('product.update');
    Route::get('{product}/destroy',[ProductController::class,'destroy'])->name('product.destroy');
    Route::post('/delete_quantiy/{product}',[ProductController::class,'setDestoryDescriptionId'])->name('product.delete_quantiy');
});
Route::prefix('transcations')->middleware(['auth'])->group(function (){
    Route::get('/',[TranscationController::class,'index'])->name('transcation.index');
    Route::get('/create',[TranscationController::class,'create'])->name('transcation.create');
    Route::post('/create',[TranscationController::class,'create'])->name('transcation.create');
    Route::post('/store',[TranscationController::class,'store'])->name('transcation.store');
    Route::get('{transcation}/show',[TranscationController::class,'show'])->name('transcation.show');
    Route::get('{transcation}/edit',[TranscationController::class,'edit'])->name('transcation.edit');
    Route::post('{transcation}/update',[TranscationController::class,'update'])->name('transcation.update');
    Route::get('{transcation}/destroy',[TranscationController::class,'destroy'])->name('transcation.destroy');
});
Route::prefix('orders')->middleware(['auth'])->group(function (){
    Route::get('/',[OrderController::class,'index'])->name('order.index');
    Route::get('/create',[OrderController::class,'create'])->name('order.create');
    Route::post('/store/{cart}',[OrderController::class,'store'])->name('order.store');
    Route::get('{order}/show',[OrderController::class,'show'])->name('order.show');
    Route::post('{order}/show',[OrderController::class,'show'])->name('order.show');
    Route::get('{order}/edit',[OrderController::class,'edit'])->name('order.edit');
    Route::post('{order}/update',[OrderController::class,'update'])->name('order.update');
    Route::get('{order}/destroy',[OrderController::class,'destroy'])->name('order.destroy');
});
Route::prefix('carts')->middleware(['auth'])->group(function (){
    Route::get('/',[CartController::class,'index'])->name('cart.index');
    Route::get('/create',[CartController::class,'create'])->name('cart.create');
    Route::post('/store',[CartController::class,'store'])->name('cart.store');
    Route::get('{cart}/show',[CartController::class,'show'])->name('cart.show');
    Route::get('{cart}/edit',[CartController::class,'edit'])->name('cart.edit');
    Route::post('{cart}/update',[CartController::class,'update'])->name('cart.update');
    Route::get('{cart}/destroy',[CartController::class,'destroy'])->name('cart.destroy');
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
Route::prefix('posts')->middleware(['auth'])->group(function (){
    Route::get('/',[PostController::class,'index'])->name('post.index');
    Route::get('/create',[PostController::class,'create'])->name('post.create');
    Route::post('/store',[PostController::class,'store'])->name('post.store');
    Route::get('{post}/edit',[PostController::class,'edit'])->name('post.edit');
    Route::get('{post}/show',[PostController::class,'show'])->name('post.show');
    Route::post('{post}/update',[PostController::class,'update'])->name('post.update');
    Route::get('{post}/destroy',[PostController::class,'destroy'])->name('post.destroy');
});


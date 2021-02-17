<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;

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
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'list'])
->name('product-list');

Route::get('/product/create', [ProductController::class, 'createForm'])
->name('product-create-form');

Route::post('/product/create', [ProductController::class, 'create'])
->name('product-create');

Route::get('/product/{product}', [ProductController::class, 'show'])
->name('product-view');

Route::get('/product/{product}/update', [ProductController::class, 'updateForm'])
->name('product-update-form');

Route::post('/product/{product}/update', [ProductController::class, 'update'])
->name('product-update');

Route::get('/product/{product}/delete', [ProductController::class, 'delete'])
->name('product-delete');


Route::get('/shop', [ShopController::class, 'list'])
->name('shop-list');

Route::get('/shop/create', [ShopController::class, 'createForm'])
->name('shop-create-form');

Route::post('/shop/create', [ShopController::class, 'create'])
->name('shop-create');

Route::get('/shop/{shop}', [ShopController::class, 'show'])
->name('shop-view');

Route::get('/shop/{shop}/update', [ShopController::class, 'updateForm'])
->name('shop-update-form');

Route::post('/shop/{shop}/update', [ShopController::class, 'update'])
->name('shop-update');

Route::get('/shop/{shop}/delete', [SHopController::class, 'delete'])
->name('shop-delete');
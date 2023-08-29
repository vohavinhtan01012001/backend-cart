<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('products', [ProductController::class, 'index']);
Route::post('upload-status/{id}', [ProductController::class, 'addToCart']);
Route::get('carts', [CartController::class, 'index']);
Route::post('upload-quantity/{status}/{id}', [CartController::class, 'updatequantity']);
Route::post('delete-cart/{id}', [CartController::class, 'delete']);

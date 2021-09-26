<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::group(['middleware' => 'auth:sanctum'], function () {

    // Get All Product.
    Route::get('product-list', [ProductController::class, 'index']);

    // Store Product.
    Route::post('product-create', [ProductController::class, 'create']);

    // View Single Product by ID.
    Route::get('product-single/{id}', [ProductController::class, 'show']);

    // Update Product by ID.
    Route::put('product-update/{id}', [ProductController::class, 'update']);

    // Delete Product By ID.
    Route::delete('product-delete/{id}', [ProductController::class, 'delete']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
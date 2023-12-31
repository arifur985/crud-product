<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [ProductController::class,'showProduct']);
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::post('/store-product', [ProductController::class, 'storeProduct']);
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('/update-product/{id}', [ProductController::class, 'updateProduct']);
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct']);


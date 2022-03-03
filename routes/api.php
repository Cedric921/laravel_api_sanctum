<?php

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;


// Route::resource('products', ProductController::class);
Route::post('/register',  [AuthController::class, 'register']);
Route::get('/products',  [ProductController::class, 'index']);
Route::get('/products/{id}',  [ProductController::class, 'show']);
Route::get('products/search/{name}',  [ProductController::class, 'search']);
 
// Route::get('/products',  [ProductController::class, 'index']);
// Route::post('/products',  [ProductController::class, 'store']);

Route::group(['middleware' => ['auth:sanctum']], function () {
   Route::post('/products',  [ProductController::class, 'store']);
   Route::put('/products/{id}',  [ProductController::class, 'update']);
   Route::delete('/products/{id}',  [ProductController::class, 'destroy']);
   Route::post('/logout',  [AuthController::class, 'logout']);
});

 Route::get('contacts',[ContactController::class,'contact']);
 Route::post('save_contacts',[ContactController::class,'save_contact']);

//Route::get('contacts',[ContactController::class,'contact']);
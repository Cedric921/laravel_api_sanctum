<?php

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;


Route::resource('products', ProductController::class);
Route::get('products/search/{name}',  [ProductController::class, 'search']);
 
// Route::get('/products',  [ProductController::class, 'index']);
// Route::post('/products',  [ProductController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::get('contacts',[ContactController::class,'contact']);
 Route::post('save_contacts',[ContactController::class,'save_contact']);

//Route::get('contacts',[ContactController::class,'contact']);
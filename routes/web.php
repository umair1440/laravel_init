<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductsController;


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

/* Laravel 8 new route */

Route::get("/products", [ProductsController::class, "index"])->name("myroute");

Route::get("/productdetails", [ ProductsController::class, "show"])->name("detail");


/* Laravel 8 new route route */
// Route::get("/products", "App\Http\controllers\ProductsController@index");


/* Old laravel route method 7  */
// Route::get("/products" , "ProductsController@index");




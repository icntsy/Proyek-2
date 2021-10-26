<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkuController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get("/dashboard", function() {
    return view("halaman");
});

Route::get("/home", [AdminController::class, "index"]);
Route::get("/app", [AppController::class, "app"] );

Route::get("/template", function() {
    return view("/template/layout");

});

Route::get("/login", [LoginController::class, "index"]);

Route::get("/register", [RegisterController::class, "index"]);

Route::post("/register_cek", [RegisterController::class, "cek"]);

Route::get("/sku", [SkuController::class, "index"]);





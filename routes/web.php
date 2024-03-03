<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

Route::get('/ubicanos', function () {
    return view('ubicanos');
})->name('ubicanos');

Route::get('/registro', [RegisterController::class,'show'])->name('registro');

Route::post('/register', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class,'show'])->name('login');

Route::post('/login', [LoginController::class,'login']);

Route::get('/home', [HomeController::class,'index'])->name('indexuser');

Route::get('/logout', [LogoutController::class,'logout'])->name('logout');

Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');

Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/admin', [AdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');

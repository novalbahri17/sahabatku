<?php

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

// Rute untuk halaman awal (resources/views/welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Auth views (resources/views/Auth/)
Route::get('/newuser', function () {
    return view('Auth.newuser');
});

Route::get('/userlists', function () {
    return view('Auth.userlists');
});

// Rute untuk Dashboard views (resources/views/Dashboard/)
Route::get('/dashboard', function () {
    return view('Dashboard.index');
});

// Rute untuk Master Product views (resources/views/Master/Product/)
Route::get('/product/add', function () {
    return view('Master.Product.addproduct');
});

Route::get('/product/list', function () {
    return view('Master.Product.productlist');
});

// Rute untuk Master Transaksi views (resources/views/Master/Transaksi/)
Route::get('/transaksi/purchase/list', function () {
    return view('Master.Transaksi.purchaselist');
});
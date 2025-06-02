<?php

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

// Rute default untuk halaman welcome (dikembalikan seperti semula)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman Dashboard sekarang mengarah ke Dashboard/dashboard.blade.php
Route::get('/dashboard', function () {
    return view('Dashboard.dashboard'); // Sesuaikan dengan nama file baru Anda
});

// Rute untuk halaman autentikasi (tetap sama)
Route::get('/newuser', function () {
    return view('Auth.newuser');
});

Route::get('/userlists', function () {
    return view('Auth.userlists');
});

// Rute untuk halaman Master Product (tetap sama)
Route::get('/product/add', function () {
    return view('Master.Product.addproduct');
});

Route::get('/product/list', function () {
    return view('Master.Product.productlist');
});

// Rute untuk halaman Master Transaksi (tetap sama)
Route::get('/transaksi/purchase-list', function () {
    return view('Master.Transaksi.purchaselist');
});

// Jika Anda masih menggunakan AJAX load untuk header/sidebar (meskipun @include disarankan):
Route::get('/layout/header', function () {
    return view('layout._header');
});

Route::get('/layout/sidebar', function () {
    return view('layout._sidebar');
});

// Tambahkan ini di routes/web.php
Route::get('/product/details', function () {
    // Logika untuk menampilkan detail produk
    return view('Master.Product.productdetails'); // Anda mungkin punya view ini
});

Route::get('/product/edit', function () {
    // Logika untuk menampilkan form edit produk
    return view('Master.Product.editproduct'); // Anda mungkin punya view ini
});
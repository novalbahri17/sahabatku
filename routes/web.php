<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan route untuk aplikasi web.
| Route-route ini dimuat oleh RouteServiceProvider dalam grup middleware "web".
| Silakan buat sesuatu yang hebat!
|
*/

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('Dashboard.dashboard'); // Menuju ke Dashboard/dashboard.blade.php
});

// Autentikasi
Route::get('/newuser', function () {
    return view('Auth.newuser');
});

Route::get('/userlists', function () {
    return view('Auth.userlists');
});

Route::get('/newuser/edit', function () {
    return view('Auth.newuseredit'); // Harus sesuai dengan nama file: Auth.newuseredit
});

Route::get('/profile', function () {
    return view('Auth.profile'); // Halaman profil pengguna
});

// Master Product
Route::get('/product/add', function () {
    return view('Master.Product.addproduct');
});

Route::get('/product/list', function () {
    return view('Master.Product.productlist');
});

Route::get('/product/details', function () {
    return view('Master.Product.product-details'); // Detail produk
});

Route::get('/product/edit', function () {
    return view('Master.Product.editproduct'); // Form edit produk
});

// Master Transaksi
Route::get('/transaksi/purchase-list', function () {
    return view('Master.Transaksi.purchaselist');
});

// Layout Components (untuk AJAX load jika masih digunakan)
Route::get('/layout/header', function () {
    return view('layout._header');
});

Route::get('/layout/sidebar', function () {
    return view('layout._sidebar');
});
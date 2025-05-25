<?php

use Illuminate\Support\Facades\Route;
// Admin
Route::get('/admin', function () {
    return view('admin/landing-page-admin');
});









// Client
Route::get('/client', function () {
    return view('client/landing-page-client');
});
Route::get('/dashboard', function () {
    return view('client/dashboard');
});
Route::get('/home', function () {
    return view('client/home');
});
Route::get('/cart', function () {
    return view('client/cart');
});
Route::get('/allmenu', function () {
    return view('client/allmenu');
});
Route::get('/nota', function () {
    return view('client/nota');
});


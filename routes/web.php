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

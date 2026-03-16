<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/tim', function () {
    return view('tim');
})->name('tim');

Route::get('/sibulan', function () {
    return view('sibulan');
})->name('sibulan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

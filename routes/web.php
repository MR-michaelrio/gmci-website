<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $galleryImages = collect(range(1, 9))->map(fn($i) => "galeri $i.jpg")->all();
    return view('welcome', compact('galleryImages'));
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

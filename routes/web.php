<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda']);
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/layanan', [PageController::class, 'layanan']);
Route::post('/layanan', [PageController::class, 'kirimLayanan']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/kontak', [PageController::class, 'kontak']);

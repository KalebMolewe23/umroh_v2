<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User_profileController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all_product', [HomeController::class, 'all_product'])->name('/all_product');
Route::get('/search_city', [HomeController::class, 'search_city'])->name('/search_city');
Route::get('/detail-product/{id}', [HomeController::class, 'detailProduct']);
Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/all_blog/{id}', [HomeController::class, 'all_blog'])->name('all_blog');
Route::get('/content_blog/{id}', [HomeController::class, 'content_blog'])->name('content_blog');
Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');

// user profile
Route::get('/get-data-transaction/{id}', [User_profileController::class, 'getData']);
Route::post('/execute-payment', [User_profileController::class, 'executePayment']);
Route::post('/pay-off', [User_profileController::class, 'payOff']);
Route::post('/user_profile/proses_edit_user/{id}', [User_profileController::class, 'proses_edit_user']);
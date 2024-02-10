<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User_profileController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all_product', [HomeController::class, 'all_product'])->name('/all_product');
Route::get('/search_city', [HomeController::class, 'search_city'])->name('/search_city');
Route::get('/detail-product/{id}', [HomeController::class, 'detailProduct']);
Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');

// user profile
Route::get('/get-data-transaction/{id}', [User_profileController::class, 'getData']);
Route::post('/execute-payment', [User_profileController::class, 'executePayment']);
Route::post('/pay-off', [User_profileController::class, 'payOff']);
Route::get('/data_transaction_paid_dp', [User_profileController::class, 'data_transaction_paid_dp']);
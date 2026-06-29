<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/lead', [MainController::class, 'storeLead'])->name('lead.store');
Route::get('/thank-you', [MainController::class, 'thankyou'])->name('thankyou');

<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LeadController::class, 'index'])->name('home');
Route::post('/diagnostico', [LeadController::class, 'store'])->name('leads.store');
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');

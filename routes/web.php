<?php

use Illuminate\Support\Facades\Route;
use Msilabs\Contact\Http\Controllers\ContactController;

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'create')->name('contact');
    Route::post('/contact', 'store');
});
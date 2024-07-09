<?php

use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\UnitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});



Route::resource('invoices',InvoiceController::class);
Route::resource('units',UnitController::class);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [NewsController::class, 'index']);
Route::view('/recApply', 'recApply');
Route::view('/aboutRec', 'aboutRec');
Route::view('/contactUs', 'contactUs');
Route::view('/events', 'events');

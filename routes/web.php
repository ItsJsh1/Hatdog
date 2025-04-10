<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsUpdateController;

Route::get('/', function () {
    return redirect('/Rec-Home');
});

Route::get('/Rec-Home', [HomeController::class, 'index']);
Route::get('/News', [NewsUpdateController::class, 'index']);
Route::get('/Community', [CommunityController::class, 'showImages']);

Route::view('/Guide', 'pages.Guide');
Route::view('/Events', 'pages.Events');
Route::view('/AboutUs', 'pages.AboutUs');
Route::view('/ContactUs', 'pages.ContactUs');
// Route::view('/Community', 'pages.Community');

Route::middleware(['auth'])->group(function () {
    Route::view('/StudentMembers', 'pages.StudentMembers');
    Route::view('/AssociateMembers', 'pages.AssociateMembers');
    Route::view('/RegularMembers', 'pages.RegularMembers');
    Route::view('/MembershipInfo', 'pages.MembershipInfo');
});

Route::middleware(['auth'])->group(function () {
    Route::view('/ApplicationForm', 'forms.ApplicationForm');
    Route::view('/StudentApplicationForm', 'forms.StudentApplicationForm');
    Route::view('/RegularApplicationForm', 'forms.RegularApplicationForm');
    Route::view('/AssociateApplicationForm', 'forms.AssociateApplicationForm');
});
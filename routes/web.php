<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsUpdateController;

Route::get('/', function () {
    return redirect('/Rec-Home');
});

Route::get('/Rec-Home', function () {
    return view('pages.Rec-Home');
});

Route::get('/News', [NewsUpdateController::class, 'index']);
Route::view('/Guide', 'pages.Guide');
Route::view('/Events', 'pages.Events');
Route::view('/AboutUs', 'pages.AboutUs');
Route::view('/ContactUs', 'pages.ContactUs');
Route::view('/Community', 'pages.Community');

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
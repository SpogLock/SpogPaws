<?php

use App\Http\Controllers\Client\MasterController;
use App\Http\Controllers\Client\AuthController;

use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('client.modules.home');
});

Route::controller(MasterController::class)->group(function () {
    Route::get('/for-vets/register', 'get_vets_registerpage')->name('get-vets-registerpage');
    Route::get('/pet-owners/find-vet', 'get_find_vetspage')->name('get-find-vetspage');
    Route::get('/pet-owners/find-vet/vet-details', 'get_vets_detailpage')->name('get-vets-detailpage');
    Route::get('/case-studies', 'get_casestudiespage')->name('get-casestudiespage');
    Route::get('/pet-owners/adopt-pet', 'get_adoptionpage')->name('get-adoptionpage');
    Route::get('/pet-owners/report-case', 'get_reportcasepage')->name('get-reportcasepage');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/signup', 'get_registerpage')->name('get-registerpage');
    Route::post('/register','signupuser')->name('register-user');
    Route::get('/login-page', 'get_loginpage')->name('get-loginpage');
    Route::post('/login','loginuser')->name('login-user');
    Route::post('/logout','logoutUser')->name('logout-user');
});

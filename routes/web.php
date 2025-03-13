<?php

use App\Http\Controllers\Client\MasterController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('client.modules.home');
});

Route::controller(MasterController::class)->group(function () {
    Route::get('/login', 'get_loginpage')->name('get-loginpage');
    Route::get('/register', 'get_registerpage')->name('get-registerpage');
    Route::get('/for-vets/register', 'get_vets_registerpage')->name('get-vets-registerpage');
    Route::get('/pet-owners/find-vet', 'get_find_vetspage')->name('get-find-vetspage');
    Route::get('/pet-owners/find-vet/vet-details', 'get_vets_detailpage')->name('get-vets-detailpage');
    Route::get('/case-studies', 'get_casestudiespage')->name('get-casestudiespage');
    Route::get('/pet-owners/adopt-pet', 'get_adoptionpage')->name('get-adoptionpage');
    Route::get('/pet-owners/report-case', 'get_reportcasepage')->name('get-reportcasepage');


});

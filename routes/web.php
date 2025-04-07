<?php

use App\Http\Controllers\Client\MasterController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\AccountController;
use App\Http\Controllers\Client\ClinicController;
use App\Http\Controllers\Vet\VetsMasterController;
use App\Http\Controllers\Vet\ClinicManagmentController;


use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('client.modules.home');
})->name('home');
Route::controller(MasterController::class)->group(function () {
    Route::get('/for-vets/register', 'get_vets_registerpage')->name('get-vets-registerpage');
    Route::get('/case-studies', 'get_casestudiespage')->name('get-casestudiespage');
    Route::get('/pet-owners/adopt-pet', 'get_adoptionpage')->name('get-adoptionpage');
    Route::get('/pet-owners/report-case', 'get_reportcasepage')->name('get-reportcasepage');
});

// User Login & Authentication Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/signup', 'get_registerpage')->name('get-registerpage');
    Route::post('/register','signupuser')->name('register-user');
    Route::get('/login-page', 'get_loginpage')->name('get-loginpage');
    Route::post('/login','loginuser')->name('login-user');
    Route::post('/logout','logoutUser')->name('logout-user');
});

//Protected Routes (Require Authentication)
// Route::middleware(['auth'])->group(function () {
    Route::prefix('manage-account')->controller(AccountController::class)->group(function () {
        Route::get('/', 'get_accountManagmentpage')->name('get-accountManagmentpage');
        Route::post('/update-personal-info', 'update_personal_info')->name('update-personal-info');
        Route::post('/update-password', 'update_password')->name('update-password');
    });

    Route::prefix('pet-owners')->controller(AccountController::class)->group(function () {
    Route::controller(ClinicController::class)->group(function () {
        Route::get('/', 'get_find_vetspage')->name('get-find-vetspage');
        Route::get('/vet-details/{id}', 'get_vets_detailpage')->name('get-vets-detailpage');
        });
    });

    Route::prefix('clinic-dashboard')->controller(VetsMasterController::class)->group(function () {
        Route::get('/{id}', 'get_vets_dashboard')->name('get-vets-dashboard');
    });


     Route::controller(ClinicManagmentController::class)->group(function () {
        Route::post('/create-clinic', 'createClinic')->name('create-clinic');
    });

    Route::prefix('clinic-services')->controller(ClinicManagmentController::class)->group(function () {
        Route::post('/add', 'addService')->name('add-service');
        Route::put('/update/{id}', 'updateService')->name('update-service');
        Route::delete('/delete/{id}', 'deleteService')->name('delete-service');
    });

    Route::prefix('clinic')->controller(ClinicManagmentController::class)->group(function () {
        Route::post('/update-info', 'updateClinicInfo')->name('update-clinic-info');
    });


// });




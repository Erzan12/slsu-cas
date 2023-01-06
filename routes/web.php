<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {

    /**
     * TODO: Must be inside the controller
     * So that in the future if we pass some data to this route
     * it won't make the route messy
     */
    Route::get('/', function () {
        return view('homepage');
    });
    


    /**
     * controller function helps to group the routes
     * and calling the controller once.
     * Instead of keep on calling the controller.
     */
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login')->name('authenticate');
    });
 
    Route::get('/register', [PatientController::class, 'index']);
    Route::post('/register', [PatientController::class, 'store'])->name('patients.store');


    Route::prefix('/admin')->group(function () {
        Route::get('/', [AuthController::class, 'adminLogin']);
        Route::post('/', [AuthController::class, 'adminAuthenticate'])->name('admin.authenticate');
    });
});


Route::middleware('auth')->group(function () {

    /**
     * TODO: Must be inside the controller
     * So that in the future if we pass some data to this route
     * it won't make the route messy
     */
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    /**
     * NOTE: Add here all route related to patient
     */
    Route::middleware('patient')->group(function () {
        Route::get('/appointment-history', [AppointmentController::class, 'patientHistory'])->name('appointment.patient-history');
    });


    /**
     * NOTE: ADd here all route related to admin
     */
    Route::middleware('admin')->group(function () {
        Route::get('/specialists', [SpecialistController::class, 'index'])->name('specialists.index');
    });
});
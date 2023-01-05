<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
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
});
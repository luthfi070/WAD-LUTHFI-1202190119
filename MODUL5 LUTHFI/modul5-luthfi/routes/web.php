<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vaccineController;
use App\Http\Controllers\patientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vaccine', [vaccineController::class, 'view']);

Route::get('/formVaccine', function () {
    return view('formVaccine');
});

Route::post('/inputVaccine', [vaccineController::class, 'create']);

Route::get('/getVaccine/{id}', [vaccineController::class, 'getById']);

Route::put('/editVaccines', [vaccineController::class, 'edit']);

Route::post('/deleteVaccines/{id}', [vaccineController::class, 'delete']);

Route::get('/patient', [patientController::class, 'view']);

Route::get('/chooseVac', [patientController::class, 'chooseVac']);

Route::get('/registVac/{id}', [patientController::class, 'registrasi']);

Route::post('/daftarVaccine', [patientController::class, 'daftar']);

Route::post('/deletePatient/{id}', [patientController::class, 'delete']);

Route::get('/getPatient/{id}', [patientController::class, 'getById']);

Route::put('/editPatient', [patientController::class, 'edit']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\KuisController;


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
    return view('amfibi');
});

Route::get('/amfibi', [KuisController::class, 'Amfibi']);

Route::get('/Pelajaran', [StudyController::class, 'Pelajaran']);

Route::post('/Pelajaran', [StudyController::class, 'store']);

// Route::get('Pelajaran', [StudyController::class, 'hapus']);
Route::post('Pelajaran', [StudyController::class, 'update']);
Route::get('/Pelajaran/edit/{id}', [StudyController::class, 'edit']);


Route::get('/Kuis', [KuisController::class, 'Kuis']);
Route::get('/Kuis2', [KuisController::class, 'Kuis2']);
Route::get('/Kuis3', [KuisController::class, 'Kuis3']);
Route::get('/Kuis4', [KuisController::class, 'Kuis4']);
Route::get('/Kuis5', [KuisController::class, 'Kuis5']);

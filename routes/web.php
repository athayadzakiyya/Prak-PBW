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

Route::get('/end', function () {
    return view('end');
});

// memanggil halaman amfibi dengan memanggil function amfibi yang ada di controller
Route::get('/amfibi', [KuisController::class, 'Amfibi']);

// memanggil halaman pelajaran dengan memanggil function pelajaran yang ada di controller
Route::get('/Pelajaran', [StudyController::class, 'Pelajaran']);

// memanggil halaman pelajaran dengan memanggil function store yang ada di controller
Route::post('/Pelajaran', [StudyController::class, 'store']);

// memanggil halaman untuk menghapus data dengan memanggil function hapus yang ada di controller
Route::get('Pelajaran/hapus/{id}', [StudyController::class, 'hapus']);
// memanggil halaman auntuk mengupdate dengan memanggil function update yang ada di controller
Route::post('Pelajaran/update/{id}', [StudyController::class, 'update']);
// memanggil halaman untuk mengedit data dengan memanggil function edit yang ada di controller
Route::get('/Pelajaran/edit/{id}', [StudyController::class, 'edit']);

// memanggil halaman kuis dengan memanggil function kuis yang ada di controller
Route::get('/Kuis', [KuisController::class, 'Kuis']);
Route::get('/Kuis2', [KuisController::class, 'Kuis2']);
Route::get('/Kuis3', [KuisController::class, 'Kuis3']);
Route::get('/Kuis4', [KuisController::class, 'Kuis4']);
Route::get('/Kuis5', [KuisController::class, 'Kuis5']);

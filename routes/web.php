<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;




Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

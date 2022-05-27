<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChampsController as ChampsController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/champs', [ChampsController::class, 'index'])->name('champs.index');
Route::get('/champs/create', [ChampsController::class, 'create'])->name('champs.create');
Route::post('/champs/store', [ChampsController::class, 'store'])->name('champs.store');
Route::get('/champs/{id}/edit/', [ChampsController::class, 'edit'])->name('champs.edit');
Route::put('/champs/{id}/update/', [ChampsController::class, 'update'])->name('champs.update');
Route::delete('/champs/{id}/destroy', [ChampsController::class, 'destroy'])->name('champs.destroy');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSepatuController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sepatu', [WebSepatuController::class, 'index'])->name('sepatu.index');
Route::get('/sepatu/create', [WebSepatuController::class, 'create'])->name('sepatu.create');
Route::post('/sepatu', [WebSepatuController::class, 'store'])->name('sepatu.store');
Route::get('/sepatu/{id}', [WebSepatuController::class, 'show'])->name('sepatu.show');
Route::get('/sepatu/{id}/edit', [WebSepatuController::class, 'edit'])->name('sepatu.edit');
Route::put('/sepatu/{id}', [WebSepatuController::class, 'update'])->name('sepatu.update');Route::delete('/sepatu/{id}', [WebSepatuController::class, 'destroy'])->name('sepatu.destroy');


// Route::get('/home', )
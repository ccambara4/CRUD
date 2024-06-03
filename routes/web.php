<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicoController;




Route::get('/',[TecnicoController::class,'index'])->name('Tecnico.index');
Route::get('/create',[TecnicoController::class,'create'])->name('Tecnico.create');
Route::post('/store',[TecnicoController::class,'store'])->name('Tecnico.store');
Route::get('/show/{id}',[TecnicoController::class,'show'])->name('Tecnico.show');
Route::get('/edit/{id}',[TecnicoController::class,'edit'])->name('Tecnico.edit');
Route::put('/update/{id}',[TecnicoController::class,'update'])->name('Tecnico.update');
Route::delete('/destroy/{id}',[TecnicoController::class,'destroy'])->name('Tecnico.destroy');


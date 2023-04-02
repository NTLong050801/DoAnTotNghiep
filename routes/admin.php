<?php

use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;


Route::get('/home',function (){
    return view('admin.home');
})->name('admin.home');

Route::prefix('major')->group(function (){
    Route::get('index',[MajorController::class,'index'])->name('major.index');
    Route::get('create',[MajorController::class,'create'])->name('major.create');
    Route::post('store',[MajorController::class,'store'])->name('major.store');
    Route::get('{id}/edit',[MajorController::class,'edit'])->name('major.edit');
    Route::post('{id}/update',[MajorController::class,'update'])->name('major.update');
    Route::get('{id}/destroy',[MajorController::class,'destroy'])->name('major.destroy');
});

Route::prefix('student')->group(function (){
    Route::get('index',[StudentController::class,'index'])->name('student.index');
    Route::get('create',[StudentController::class,'create'])->name('student.create');
    Route::post('store',[StudentController::class,'store'])->name('student.store');
    Route::get('{id}/edit',[StudentController::class,'edit'])->name('student.edit');
    Route::post('{id}/update',[StudentController::class,'update'])->name('student.update');
    Route::get('{id}/destroy',[StudentController::class,'destroy'])->name('student.destroy');
});

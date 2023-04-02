<?php
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;


Route::get('/home',function (){
    return view('student.home');
})->name('student.home');


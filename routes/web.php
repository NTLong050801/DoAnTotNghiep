<?php

use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebhooksController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/changePassword',[ProfileController::class,'changePassword'])->name('changePassword');
});


Route::get('/',function (){
    return redirect()->route('login');
});

Route::prefix('/admin')->group(function (){
    Route::get('/dashboard',function (){
        return view('pages.admin.index');
    })->name('admin.index');

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
        Route::get('search',[StudentController::class,'search'])->name('student.search');
        Route::get('create',[StudentController::class,'create'])->name('student.create');
        Route::post('store',[StudentController::class,'store'])->name('student.store');
        Route::get('{id}/edit',[StudentController::class,'edit'])->name('student.edit');
        Route::post('{id}/update',[StudentController::class,'update'])->name('student.update');
        Route::get('{id}/destroy',[StudentController::class,'destroy'])->name('student.destroy');
    });

    Route::prefix('teachers')->group(function (){
        Route::get('index',[TeacherController::class,'index'])->name('teachers.index');
        Route::get('search',[TeacherController::class,'search'])->name('teachers.search');
        Route::get('create',[TeacherController::class,'create'])->name('teachers.create');
        Route::get('export',[TeacherController::class,'export'])->name('teacher.export');
        Route::post('store',[TeacherController::class,'store'])->name('teachers.store');
        Route::get('{teacher}/edit',[TeacherController::class,'edit'])->name('teachers.edit');
        Route::post('{teacher}/update',[TeacherController::class,'update'])->name('teachers.update');
        Route::get('{teacher}/destroy',[TeacherController::class,'destroy'])->name('teachers.destroy');
    });

});

Route::webhooks('webhook-receiving-url');

Route::get('/hooks/slack',[WebhooksController::class,'index']);
Route::post('/hooks/slack', [WebhooksController::class, 'send'])->withoutMiddleware(VerifyCsrfToken::class)->name('slack.store');
Route::get('/table',function (){
    return view('pages.table.index');
});

require __DIR__ . '/auth.php';

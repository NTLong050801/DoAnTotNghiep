<?php

use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Students\ExamsController;
use App\Http\Controllers\Students\ResultsContrller;
use App\Http\Controllers\Teachers\ExamController;
use App\Http\Controllers\Teachers\ExamsQuestionsController;
use App\Http\Controllers\Teachers\QuestionController;
use App\Http\Controllers\Teachers\ResultsController;
use App\Http\Controllers\WebhooksController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    Route::get('/changePassword', [ProfileController::class, 'changePassword'])->name('changePassword');

    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.admin.index');
        })->name('admin.index');

        Route::prefix('major')->group(function () {
            Route::get('index', [MajorController::class, 'index'])->name('major.index');
            Route::get('create', [MajorController::class, 'create'])->name('major.create');
            Route::post('store', [MajorController::class, 'store'])->name('major.store');
            Route::get('{id}/edit', [MajorController::class, 'edit'])->name('major.edit');
            Route::post('{id}/update', [MajorController::class, 'update'])->name('major.update');
            Route::get('{id}/destroy', [MajorController::class, 'destroy'])->name('major.destroy');
        });

        Route::prefix('student')->group(function () {
            Route::get('index', [StudentController::class, 'index'])->name('admin.student.index');
            Route::get('search', [StudentController::class, 'search'])->name('admin.student.search');
            Route::get('create', [StudentController::class, 'create'])->name('admin.student.create');
            Route::post('store', [StudentController::class, 'store'])->name('admin.student.store');
            Route::get('{student}/edit', [StudentController::class, 'edit'])->name('admin.student.edit');
            Route::post('{student}/update', [StudentController::class, 'update'])->name('admin.student.update');
            Route::get('{student}/destroy', [StudentController::class, 'destroy'])->name('admin.student.destroy');
            Route::get('export/{type}', [StudentController::class, 'export'])->name('admin.student.export');
            Route::post('import', [StudentController::class, 'import'])->name('admin.student.import');

        });

        Route::prefix('teachers')->group(function () {
            Route::get('index', [TeacherController::class, 'index'])->name('teachers.index');
            Route::get('search', [TeacherController::class, 'search'])->name('teachers.search');
            Route::get('create', [TeacherController::class, 'create'])->name('teachers.create');
            Route::get('export/{type}', [TeacherController::class, 'export'])->name('teachers.export');
            Route::post('import', [TeacherController::class, 'import'])->name('teachers.import');
            Route::post('store', [TeacherController::class, 'store'])->name('teachers.store');
            Route::get('{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
            Route::post('{teacher}/update', [TeacherController::class, 'update'])->name('teachers.update');
            Route::get('{teacher}/destroy', [TeacherController::class, 'destroy'])->name('teachers.destroy');
        });

    });

    Route::prefix('/teachers')->group(function () {
        Route::get('/', function () {
            return view('pages.teachers.index');
        })->name('teachers.dashboard');
        Route::prefix('exams')->group(function () {
            Route::get('/', [ExamController::class, 'index'])->name('teachers.exams.index');
            Route::get('/create', [ExamController::class, 'create'])->name('teachers.exams.create');
            Route::post('/create', [ExamController::class, 'store'])->name('teachers.exams.store');
            Route::get('/{exam}/edit', [ExamController::class, 'edit'])->name('teachers.exams.edit');
            Route::post('/{exam}/update', [ExamController::class, 'update'])->name('teachers.exams.update');
            Route::get('/{exam}/destroy', [ExamController::class, 'destroy'])->name('teachers.exams.destroy');
            Route::get('/{exam}/show', [ExamController::class, 'show'])->name('teachers.exams.show');
            Route::get('/{exam}/addQuestion', [ExamController::class, 'addQuestion'])->name('teachers.exams.addQuestion');
            Route::get('/{exam}/myQuestion', [ExamController::class, 'myQuestion'])->name('teachers.exams.myQuestion');
            Route::get('/{exam}/studentInClass/{keyword}', [ExamController::class, 'studentInClass'])->name('teachers.exams.studentInClass');
            Route::get('/{exam_id}/deleteStudent/{user_id}', [ExamController::class, 'deleteStudent'])->name('teachers.exams.deleteStudent');

            Route::get('/{exam_id}/resetExam/{user_id}', [ExamController::class, 'resetExam'])->name('teachers.exams.resetExam');
            Route::get('/{exam_id}/resultExam/{user_id}', [ExamController::class, 'resultExam'])->name('teachers.exams.resultExam');
            Route::get('/{exam_id}/endExam/{user_id}', [ExamController::class, 'endExam'])->name('teachers.exams.endExam');
            Route::get('/{exam_id}/isEnd', [ExamController::class, 'isEnd'])->name('teachers.exams.isEnd');

            Route::get('/{exam}/{status}/active', [ExamController::class, 'active'])->name('teachers.exams.active');
            Route::get('/{exam_id}/{password}/newPassword', [ExamController::class, 'newPassword'])->name('teachers.exams.newPassword');

            Route::get('/{exam}/addClass/{class}', [ExamController::class, 'addClass'])->name('teachers.exams.addClass');
            Route::post('/{exam}/addStudent', [ExamController::class, 'addStudent'])->name('teachers.exams.addStudent');

            Route::get('/{exam_id}/chart', [ExamController::class, 'chart'])->name('chart');
            Route::get('/{exam_id}/isSeeAnswers', [ExamController::class, 'isSeeAnswers']);

            Route::get('/{exam}/copy', [ExamController::class, 'copy'])->name('teachers.exams.copy');
        });

        Route::prefix('questions')->group(function () {
            Route::get('/', [QuestionController::class, 'index'])->name('teachers.questions.index');
            Route::get('/create', [QuestionController::class, 'create'])->name('teachers.questions.create');
            Route::post('/store', [QuestionController::class, 'store'])->name('teachers.questions.store');
            Route::get('/{question}/edit', [QuestionController::class, 'edit'])->name('teachers.questions.edit');
            Route::post('/{question}/update', [QuestionController::class, 'update'])->name('teachers.questions.update');
            Route::get('/{question}/destroy', [QuestionController::class, 'destroy'])->name('teachers.questions.destroy');
            Route::post('import', [QuestionController::class, 'import'])->name('teachers.questions.import');
            Route::post('/deleteSelected', [QuestionController::class, 'deleteSelected']);
            Route::prefix('review')->group(function () {
                Route::get('/', [QuestionController::class, 'review'])->name('teachers.questions.review');
                Route::get('/{question}/add', [QuestionController::class, 'add'])->name('teachers.questions.add');
                Route::post('/addSelected', [QuestionController::class, 'addSelected']);

            });
        });

        Route::prefix('exams-questions')->group(function () {
            Route::get('/', [ExamsQuestionsController::class, 'store']);
            Route::get('/{id_question}/destroy', [ExamsQuestionsController::class, 'destroy']);
        });

        Route::prefix('classes')->group(function () {
            Route::get('/', [ClassesController::class, 'index'])->name('teachers.classes.index');
            Route::get('search', [ClassesController::class, 'search'])->name('teachers.classes.search');
            Route::get('create', [ClassesController::class, 'create'])->name('teachers.classes.create');

            Route::get('export/{type}', [ClassesController::class, 'export'])->name('teachers.classes.export');
            Route::post('import', [ClassesController::class, 'import'])->name('teachers.classes.students-import');
            Route::post('store', [ClassesController::class, 'store'])->name('teachers.classes.store');
            Route::get('/{class}/show', [ClassesController::class, 'show'])->name('teachers.classes.show');
            Route::get('{class}/edit', [ClassesController::class, 'edit'])->name('teachers.classes.edit');
            Route::post('{class}/update', [ClassesController::class, 'update'])->name('teachers.classes.update');
            Route::get('{class}/destroy', [ClassesController::class, 'destroy'])->name('teachers.classes.destroy');

            Route::get('{class_id}/classes-students', [ClassesController::class, 'classes_students'])->name('teachers.classes.classes-students');
            Route::get('/{user_id}/detail-student', [ClassesController::class, 'detail_student'])->name('teachers.classes.detail-students');
            Route::post('/createStudent', [ClassesController::class, 'createStudent'])->name('teachers.classes.createStudent');
            Route::get('/deleteStudent/{id_student}/{id_class}', [ClassesController::class, 'deleteStudent'])->name('teachers.classes.deleteStudent');

        });

        Route::prefix('results')->group(function () {
            Route::get('/{exam_id?}', [ResultsController::class, 'index'])->name('teachers.results.index');
            Route::get('/{exam_id}/{user_id}', [ResultsController::class, 'answers'])->name('teachers.results.answers');
            Route::post('/sendMail/{exam_id?}', [ResultsContrller::class, 'sendMail'])->name('teachers.results.sendMail');
            Route::get('/exportExcel/{exam_id}/', [ResultsController::class, 'exportExcel'])->name('teachers.results.exportExcel');
            Route::get('/exportPDF/{exam_id}/', [ResultsController::class, 'exportPDF'])->name('teachers.results.exportPDF');
            Route::get('/exportImg/{exam_id}/', [ResultsController::class, 'exportImg'])->name('teachers.results.exportImg');
        });

        Route::prefix('file-manager')->group(function () {
           Route::get('/',[FileManagerController::class,'index'])->name('teachers.file-manager.index');
        });
    });

    Route::prefix('/students')->group(function () {
        Route::get('/', function () {
            return view('pages.students.index');
        })->name('students.dashboard');
        Route::prefix('exams')->group(function () {
            Route::get('/', [ExamsController::class, 'index'])->name('students.exams.index');
            Route::get('/{exam}/start', [ExamsController::class, 'start'])->name('students.exams.start');
            Route::get('/{exam}/doExam', [ExamsController::class, 'doExam'])->name('students.exams.doExam');
            Route::post('/checkPassword', [ExamsController::class, 'checkPassword'])->name('students.exams.checkPassword');
            Route::post('/checkResult', [ExamsController::class, 'checkResult'])->name('students.exams.checkResult');
            Route::post('/updateWarning', [ExamsController::class, 'updateWarning'])->name('students.exams.updateWarning');
            Route::get('/{exam_id}/result', [ExamsController::class, 'result'])->name('students.exams.result');
            Route::get('/{exam_id}/updateAnswers/{index}/{answer}', [ExamsController::class, 'updateAnswers'])->name('students.exams.updateAnswers');
        });

        Route::prefix('results')->group(function () {
            Route::get('/', [ResultsContrller::class, 'index'])->name('students.results.index');
            Route::get('/{exam_id}/answers', [ResultsContrller::class, 'answers'])->name('students.results.answers');
        });
    });
});


Route::get('/', function () {
    return redirect()->route('login');
});

Route::webhooks('webhook-receiving-url');

Route::get('/hooks/slack', [WebhooksController::class, 'index']);
Route::post('/hooks/slack', [WebhooksController::class, 'send'])->withoutMiddleware(VerifyCsrfToken::class)->name('slack.store');
Route::get('/table', function () {
    return view('pages.table.index');
});
Route::get('/full-screen', function () {
    return view('full-screen');
});
Route::get('/test', function () {
    event(new \App\Events\ActiveChanged("Kich hoat"));
});
Route::get('/sendMessage/{id}', function ($id) {
    \App\Events\SendMessageEvent::dispatch($id);
});
Route::get('/getNumberMessages', function () {
    return \App\Models\ChMessage::where('to_id', auth()->id())->where('seen', false)->count();
});

Route::get('/demo', function () {
    Storage::disk('google')->put('test.txt', "hello word");
//    Storage::disk('google')->put($request->input('name'), $file->get());
});
Route::post('test', [ExamsController::class, 'test'])->name('test');
require __DIR__ . '/auth.php';

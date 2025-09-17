<?php

use App\Http\Controllers\DepartmentController;

use Illuminate\Support\Facades\Route;

// Department Website Routes
Route::prefix('department')->name('department.')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('index');
    Route::get('/about', [DepartmentController::class, 'about'])->name('about');
    Route::get('/hod-message', [DepartmentController::class, 'hodMessage'])->name('hod-message');
    Route::get('/vision-mission', [DepartmentController::class, 'visionMission'])->name('vision-mission');
    Route::get('/programs', [DepartmentController::class, 'programs'])->name('programs');
    Route::get('/learning-resources', [DepartmentController::class, 'learningResources'])->name('learning-resources');
    Route::get('/faculty', [DepartmentController::class, 'faculty'])->name('faculty');
    Route::get('/research', [DepartmentController::class, 'research'])->name('research');
    Route::get('/student-projects', [DepartmentController::class, 'studentProjects'])->name('student-projects');
    Route::get('/admission', [DepartmentController::class, 'admission'])->name('admission');
    Route::get('/iqac', [DepartmentController::class, 'iqac'])->name('iqac');
    Route::get('/placement', [DepartmentController::class, 'placement'])->name('placement');
    Route::get('/faculty-achievements', [DepartmentController::class, 'facultyAchievements'])->name('faculty-achievements');
    Route::get('/student-achievements', [DepartmentController::class, 'studentAchievements'])->name('student-achievements');
    Route::get('/alumni', [DepartmentController::class, 'alumni'])->name('alumni');
});

// Course Application Routes
use App\Http\Controllers\CourseApplicationController;
Route::get('/apply-course', [CourseApplicationController::class, 'showForm'])->name('course.apply');
Route::post('/apply-course', [CourseApplicationController::class, 'submitForm'])->name('course.apply.submit');

// Chatbot Route
use App\Http\Controllers\chatbotcontroller;
Route::post('/chatbot', [chatbotcontroller::class, 'handle']);

// Redirect root to department homepage
Route::get('/', function () {
    return redirect()->route('department.index');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [GeneralController::class, 'viewDashboard'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){

//***************Role Route*************
    Route::get('/create-role/{id?}', [RoleController::class, 'createRole'])->name('create-role');
    Route::get('/manage-role', [RoleController::class, 'manageRole'])->name('manage-role');
    Route::post('/new-role/{id?}', [RoleController::class, 'newRole'])->name('new-role');
    Route::get('/role-status/{id}', [RoleController::class, 'roleStatus'])->name('role-status');

//***************User Route*************
    Route::get('/create-user/{id?}', [UserController::class, 'createUser'])->name('create-user');
    Route::get('/manage-user', [UserController::class, 'manageUser'])->name('manage-user');
    Route::post('/new-user/{id?}', [UserController::class, 'newUser'])->name('new-user');
    Route::post('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-user');

//************Teacher Route*************
    Route::get('/add-teacher/{id?}', [TeacherController::class, 'addTeacher'])->name('add-teacher');
    Route::get('/manage-teacher', [TeacherController::class, 'manageTeacher'])->name('manage-teacher');
    Route::post('/update-teacher/{id}', [TeacherController::class, 'updateTeacher'])->name('update-teacher');
    Route::post('/delete-teacher/{id}', [TeacherController::class, 'deleteTeacher'])->name('delete-teacher');
    Route::post('/teacher-status/{id}', [TeacherController::class, 'teacherStatus'])->name('teacher-status');

//************Student Route*************
    Route::get('/create-student/{id?}', [StudentController::class, 'createStudent'])->name('create-student');
    Route::get('/manage-student', [StudentController::class, 'manageStudent'])->name('manage-student');
    Route::post('/new-student/{id?}', [StudentController::class, 'newStudent'])->name('new-student');
    Route::post('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('delete-student');
    Route::post('/student-status/{id}', [StudentController::class, 'studentStatus'])->name('student-status');

});

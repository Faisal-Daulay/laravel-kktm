<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/signin', [LoginController::class, 'login']);
Route::post('/cek_login', [LoginController::class, 'cek_login']);

// CREATE STAFFS ROUTE
Route::get('/staff-register', [StaffController::class, 'create']);
Route::post('/staff', [StaffController::class, 'store']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/view/{id}', [StudentController::class, 'show']);
    Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::get('/students/delete/{id}', [StudentController::class, 'destroy'])->name('students.delete');

    // Activity Route
    Route::get('/logs', [StudentController::class, 'log'])->name('logs');
    Route::get('/logs/view/{id}', [StudentController::class, 'logview'])->name('logs.view');


    //export excel
    Route::get('/students-export', [StudentController::class, 'export'])->name('students-export');
    Route::get('/students-pdf', [StudentController::class, 'pdf'])->name('students-pdf');

    // export PDF
    Route::get('/staff-export', [StaffController::class, 'export'])->name('staff-export');
    Route::get('/staff-pdf', [StaffController::class, 'pdf'])->name('staff-pdf');


    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
    Route::get('/staff/create', [StaffController::class, 'createStaff'])->name('staff.create');
    Route::post('/staff/store', [StaffController::class, 'storeStaff'])->name('staff.store');
    Route::get('/staff/view/{id}', [StaffController::class, 'show']);
    Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit');
    Route::put('/staff/update/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::get('/staff/delete/{id}', [StaffController::class, 'destroy']);
});

<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// routes/web.php
use App\Models\Academy;

Route::get('/academies', function () {
    $academies = Academy::all();
    return view('academies.index', compact('academies'));
});


use App\Http\Controllers\AcademyController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ManagerController;

// Academies Routes
Route::resource('academies', AcademyController::class);

// Cohorts Routes (Nested under Academies)
Route::resource('academies/{academyId}/cohorts', CohortController::class);

// Coaches Routes (Nested under Cohorts)
Route::resource('cohorts/{cohortId}/coaches', CoachController::class);

// Students Routes (Nested under Cohorts)
Route::resource('cohorts/{cohortId}/students', StudentController::class);

// Managers Routes (Nested under Cohorts)
Route::resource('cohorts/{cohortId}/managers', ManagerController::class);

// routes/web.php


Route::resource('students', StudentController::class);

use App\Http\Controllers\SupportQueryController;

// Support Query Routes
Route::get('/support', [SupportQueryController::class, 'create'])->name('support.create');
Route::post('/support', [SupportQueryController::class, 'store'])->name('support.store');
Route::get('/admin/support', [SupportQueryController::class, 'index'])->name('support.index')->middleware('auth'); // Admin only



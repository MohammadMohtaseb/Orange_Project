<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use App\Models\Academy;
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

// Route::get('/', function () {
//     return redirect()->route('dashboard');
//     return view('welcome');
// });

Route::controller(DashboardController::class)->group(function () {

    Route::any('/admin-login', 'admin_login')->name('admin.login');
    Route::any('/admin-forget-password', 'admin_forget_password')->name('admin.forget.password');
    Route::get('/admin-reset-password/{id}', 'admin_reset_password')->name('admin.reset.password');
    Route::any('/admin-update-password', 'admin_update_password')->name('admin.forget.update');

    Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {

        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
// Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
// Route::any('/admin-forget-password', 'admin_forget_password')->name('admin.forget.password');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/users/{id}', [UserController::class, 'update'])->name(name: 'user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('students/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student.delete');
    Route::get('/students/{id}', [StudentController::class, 'view'])->name('student.view');
    Route::get('/cohorts/{academyId}', [StudentController::class, 'getCohortsByAcademy']);
    // Route for AJAX search
    Route::get('/students/search', [StudentController::class, 'search'])->name('student.search');



    Route::get('/academy', [AcademyController::class, 'index'])->name('academies');
    Route::post('/academies/store', [AcademyController::class, 'store'])->name('academy.store');
    Route::get('/academies/create', [AcademyController::class, 'create'])->name('academy.create');
    Route::get('/academies/{id}/edit', [AcademyController::class, 'edit'])->name('academy.edit');
    Route::delete('/academies/{id}', [AcademyController::class, 'destroy'])->name('academy.delete');
    Route::put('/academies/{academy}', [AcademyController::class, 'update'])->name('academy.update');
    Route::post('/academy/import', [AcademyController::class, 'import'])->name('academy.import');



    Route::post('/Cohorts/store', [CohortController::class, 'store'])->name('cohort.store');
    Route::get('/Cohorts/create', [CohortController::class, 'create'])->name('cohort.create');
    Route::get('/Cohorts', [CohortController::class, 'index'])->name('cohorts');
    Route::get('/Cohorts/{id}/edit', [CohortController::class, 'edit'])->name('cohort.edit');
    Route::put('/Cohorts/{id}', [CohortController::class, 'update'])->name('cohort.update');
    Route::delete('/Cohorts/{id}', [CohortController::class, 'destroy'])->name('cohort.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::get('/', [VisitController::class, 'index'])->name('watch.home');


Route::get('visit/academies', [VisitController::class, 'showacademy'])->name('watch.academies');

Route::get('/visit/academies/{academy}', [VisitController::class, 'showCohorts'])->name('academy.showCohorts');

Route::get('visit/cohort/{cohort}', [VisitController::class, 'showCohortWithStudents'])->name('watch.cohorts');





Route::get('/show.students', function () {
    return view('students');
})->name('show.students');
// require DIR.'/auth.php';



require __DIR__ . '/auth.php';

use Illuminate\Support\Facades\Mail;

Route::get('/test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('alhussienmohammad9@gmail.com')->subject('Test Email');
    });

    return 'Email sent!';
});


Route::get('/home', function () {
    return view('home');
})->name('home');

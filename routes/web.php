<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\StudentController;
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

// pembimbing
Route::middleware('isLogin', 'CekRole:pembimbing')->group(function () {
    Route::get('/pembimbing', [PembimbingController::class, 'index']);
    Route::get('/pembimbing-edit/edit/{id}', [PembimbingController::class, 'edit'])->name('pembimbing.edit');
    Route::post('/pembimbing-edit/update/{id}', [PembimbingController::class, 'update'])->name('pembimbing.update');
    // Route::get('/pembimbing/search', [PembimbingController::class, 'search'])->name('pembimbing.search');
});

// kesiswaan
Route::middleware('isLogin', 'CekRole:kesiswaan')->group(function () {
    Route::get('/kesiswaan', [KesiswaanController::class, 'index']);
    // Route::get('/kesiswaan/search', [KesiswaanController::class, 'search'])->name('kesiswaan.search');
});

// student
Route::middleware('isLogin', 'CekRole:user')->group(function () {
    Route::get('/student-data', [StudentController::class, 'index']);
    Route::get('/student-absen', [StudentController::class, 'absen']);
    Route::get('/student-search/search', [StudentController::class, 'search'])->name('students.search');
    Route::get('/student-edit/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('/student-edit/update/{id}', [StudentController::class, 'update'])->name('students.update');
});

// login & register

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.auth');


Route::get('/404', function () {
    return view('404');
});

// coba-coba
// Route::get('/tambah', function () {
//     $student = Student::find(9);
//     $absen = ['1', '2'];
//     $student->absen()->sync($absen);
//     echo "sukses mas";
// });

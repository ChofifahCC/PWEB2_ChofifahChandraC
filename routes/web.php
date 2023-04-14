<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\otentikasi\OtentikasiController;
use App\Http\Controllers\KriteriaController;
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

Route::get('/', [OtentikasiController::class, 'index'])->name('login');
Route::post('/login', [OtentikasiController::class, 'index'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::resources('/kriteria',[KriteriaController::class,'index']);
route::group(['middleware' => ['auth', 'level:admin']], function(){
    Route::get('/data-kriteria', [KriteriaController::class, 'index'])->name('data-kriteria');
    Route::get('/create-kriteria', [KriteriaController::class, 'create'])->name('create-kriteria');
    Route::post('/simpan-kriteria', [KriteriaController::class, 'store'])->name('simpan-kriteria');
    Route::get('/edit-kriteria/{id}', [KriteriaController::class, 'edit'])->name('edit-kriteria');
    Route::post('/update-kriteria/{id}', [KriteriaController::class, 'update'])->name('update-kriteria');
    Route::get('/delete-kriteria/{id}', [KriteriaController::class, 'destroy'])->name('delete-kriteria');
});


require __DIR__.'/auth.php';

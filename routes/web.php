<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JualSampahController;
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
    return view('auth.login');
});


// Route::controller(AuthController::class)->group(function () {
//     Route::get('register', 'register')->name('register');
//     Route::post('register', 'registerSave')->name('register.save');
  
//     Route::get('login', 'login')->name('login');
//     Route::post('login', 'loginAction')->name('login.action');
  
//     Route::get('logout', 'logout')->middleware('auth')->name('logout');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
});

Route::group(['middleware' => 'auth'],function (){
   
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    

    
});

Route::get('/jual-sampah', [JualSampahController::class, 'index'])->name('jual-sampah');

// CRUD
// Route::get('tambah-data', [JualSampahController::class, 'index']);
Route::get('create', [JualSampahController::class, 'create'])->name('jual_sampahs.create');
Route::post('store', [JualSampahController::class, 'store'])->name('jual_sampahs.store');
Route::get('show/{id}', [JualSampahController::class, 'show'])->name('jual_sampahs.show');
Route::get('edit/{id}', [JualSampahController::class, 'edit'])->name('jual_sampahs.edit');
Route::put('edit/{id}', [JualSampahController::class, 'update'])->name('jual_sampahs.update');
Route::delete('delete/{id}', [JualSampahController::class, 'destroy'])->name('jual_sampahs.destroy');

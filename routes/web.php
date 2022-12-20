<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\karkelController;
use App\Http\Controllers\wargaController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\keuanganController;
use App\Http\Controllers\inventarisController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

// Roles
Route::resource('roles', App\Http\Controllers\RolesController::class);

// Permissions
Route::resource('permissions', App\Http\Controllers\PermissionsController::class);

// Users
Route::middleware('auth')->group(function(){
    Route::prefix('kartu-keluarga')->name('kk.')->group(function(){
        Route::get('/', [karkelController::class, 'index'])->name('index');
        Route::get('/create', [karkelController::class, 'create'])->name('create');
        Route::post('/store', [karkelController::class, 'store'])->name('store');
    });

    Route::prefix('data-warga')->name('warga.')->group(function(){
        Route::get('/', [wargaController::class, 'index'])->name('index');
        Route::get('/create', [wargaController::class, 'create'])->name('create');
        Route::post('/store', [wargaController::class, 'store'])->name('store');
    });

    Route::prefix('pelayanan-warga')->name('pelayanan.')->group(function(){
        Route::get('/', [pelayananController::class, 'index'])->name('index');
    });

    Route::prefix('kegiatan-warga')->name('kegiatan.')->group(function(){
        Route::get('/', [kegiatanController::class, 'index'])->name('index');
    });

    Route::prefix('keuangan')->name('keuangan.')->group(function(){
        Route::get('/', [keuanganController::class, 'index'])->name('index');
    });

    Route::prefix('inventaris')->name('inventaris.')->group(function(){
        Route::get('/', [inventarisController::class, 'index'])->name('index');
    });

    Route::prefix('users')->name('users.')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('destroy');
        Route::get('/update/status/{user_id}/{status}', [UserController::class, 'updateStatus'])->name('status');

        Route::get('/import-users', [UserController::class, 'importUsers'])->name('import');
        Route::post('/upload-users', [UserController::class, 'uploadUsers'])->name('upload');

        Route::get('export/', [UserController::class, 'export'])->name('export');
    });
});


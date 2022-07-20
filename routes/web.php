<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\SheetsController;
use App\Http\Controllers\DashboardController;

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



Route::middleware('auth')->group(function () {
    Route::get('home', [DashboardController::class, 'index'])->name('home');
    Route::get('table', [SheetsController::class,'index'])->name('table');
    Route::get('table/create', [SheetsController::class,'create']);
    Route::post('table/store', [SheetsController::class,'store'])->name('table.store');
    Route::get('table/show/{id}', [SheetsController::class,'show'])->name('table.show');
    Route::post('table/destroy/{id}', [SheetsController::class,'destroy'])->name('table.destroy');
    Route::get('show', [SheetsController::class,'indexes'])->name('show');
    Route::put('show/update/{id}', [SheetsController::class,'update'])->name('show.update');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signOut');

});

Route::middleware('guest')->group(function () {
    Route::get('login', [CustomAuthController::class, 'Customlogin'])->name('login');
    Route::get('/', [CustomAuthController::class, 'index'])->name('index');
    Route::post('login', [CustomAuthController::class, 'Customlogin']);
    Route::get('register', [CustomAuthController::class, 'register'])->name('register');
    Route::post('register', [CustomAuthController::class, 'customRegistration']); 
    
});


###Table##########




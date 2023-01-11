<?php

use App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\contactcontroller;
use App\Http\Controllers\Frontend\aboutcontroller;
use App\Http\Controllers\Frontend\Homecontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\gallerycontroller;
use App\Http\Controllers\Frontend\teamcontroller;
use App\Http\Controllers\logincontroller;


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
Route::post('/contact', [contactcontroller::class,'contact']);


Route::get('/', [Homecontroller::class,'index']);
Route::get('/contact', [contactcontroller::class,'index']);
Route::get('/gallery', [gallerycontroller::class,'index']);
Route::get('/team', [teamcontroller::class,'index']);
Route::get('/about', [aboutcontroller::class,'index']);
Route::get('/edit/{id}',[DashboardController::class,'Edit'])->middleware(['auth', 'verified'])->name('edit');;

Route::get('/view-data',[DashboardController::class,'show'])->middleware(['auth', 'verified'])->name('view-data');
Route::get('/view-data/{id}',[DashboardController::class,'get'])->middleware(['auth', 'verified'])->name('view-data');
Route::post ('/update', [DashboardController::class,'update']);
Route::get ('/delete/{id}', [DashboardController::class,'delete']);
Route::get('/dashboard',[DashboardController::class,'display'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


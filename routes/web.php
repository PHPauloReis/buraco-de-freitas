<?php

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contato', [ContactController::class, 'form']);
Route::post('/contato', [ContactController::class, 'sendMail'])->name('contact.sendMail');
Route::get('/denunciar', [ComplaintController::class, 'create'])->name('complaint.create');
Route::post('/denunciar', [ComplaintController::class, 'store'])->name('complaint.store');
Route::post('/denunciar/upload', [ComplaintController::class, 'upload'])->name('complaint.upload');

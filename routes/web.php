<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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

Route::get('/', [ImageUploadController::class,'index']);
Route::post('/', [ImageUploadController::class,'store'])->name('image.upload');
Route::get('/display', [ImageUploadController::class,'display'])->name('image.display');

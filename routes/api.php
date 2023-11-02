<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();

Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.home')->middleware('isAdmin');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');


Route::post('/login',[UserController::class,'login']);
Route::post('/profile',[UserController::class,'profile']);
Route::get('/index',[UserController::class,'index']);
Route::post('/store',[UserController::class,'store']);
Route::get('/getUser/{id}',[UserController::class,'getUser']);
Route::post('/update',[UserController::class,'update']);
Route::delete('/destroy/{id}',[UserController::class,'destroy']);
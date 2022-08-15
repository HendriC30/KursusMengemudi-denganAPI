<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;

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
    return view('welcome');
});

route::middleware(['auth'])->group(function(){
    route::get('/Student',[StudentController::class,'index']);
    route::get('/Student/create',[StudentController::class,'create']);
    route::post('/Student/store',[StudentController::class,'store']);
    route::get('/Student/{id}/edit',[StudentController::class,'edit']);
    route::put('/Student/{id}',[StudentController::class,'update']);
    route::delete('/Student/{id}',[StudentController::class,'destroy']);
    
    route::get('/Car',[CarController::class,'index']);
    route::get('/Car/create',[CarController::class,'create']);
    route::post('/Car/store',[CarController::class,'store']);
    route::get('/Car/{id}/edit',[CarController::class,'edit']);
    route::put('/Car/{id}',[CarController::class,'update']);
    route::delete('/Car/{id}',[CarController::class,'destroy']);
    
    route::get('/Instructor',[InstructorController::class,'index']);
    route::get('/Instructor/create',[InstructorController::class,'create']);
    route::post('/Instructor/store',[InstructorController::class,'store']);
    route::get('/Instructor/{id}/edit',[InstructorController::class,'edit']);
    route::put('/Instructor/{id}',[InstructorController::class,'update']);
    route::delete('/Instructor/{id}',[InstructorController::class,'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

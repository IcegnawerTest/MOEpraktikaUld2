<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, "index"])->name('index');

Route::get('/login', [UserController::class, "signin"])->name('signin');
Route::post('/signin_process', [UserController::class, "signin_process"])->name('signin_process');
Route::get('/signout', [UserController::class, "signout"]);

Route::get('/account', [UserController::class, "account"])->name('account');
Route::post('/signout', [UserController::class, 'signout'])->name('signout');

Route::get('/registration', [UserController::class, "signup"])->name('signup');
Route::post('/signup_process', [UserController::class, "signup_process"])->name('signup_process');

Route::post("/enroll",[ApplicationController::class, "create_application"]);

Route::get("/admin",[AdminController::class,"index"]);
Route::post("/cours",[CourseController::class,"create_course"]);
Route::post("/category",[CourseController::class,"create_categories"]);

Route::get("/categoryUser",[CourseController::class,"categoryUser"])->name('categoryUser');
Route::post('/filter-courses', [CourseController::class, 'filterCourses'])->name('filter-courses');;

Route::get("/application/{id_application}/confirm",[ApplicationController::class,"confirm"]);

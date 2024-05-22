<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;


Route::resource('/projects', ProjectController::class)->middleware('auth');
Route::resource('/activities', ActivityController::class)->middleware('auth');
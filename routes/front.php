<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

Route::get('/',[FrontPageController::class,'index']);
Route::get('/about',[FrontPageController::class,'about']);
Route::get('/contact',[FrontPageController::class,'contact']);

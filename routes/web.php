<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('front_layouts.home');
//     // echo "Hello";
// });

// Route::get('/contact',function(){
//     $name="Long Dara";
//     $phone="093 77 12 44";
//     // $name=null;
//     // $phone=null;
//     return view('contact',compact('name','phone'));
// });





// Demo Customer

// Route::get('/customers',[CustomerController::class,'index']);






// Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']],function(){

  Route::controller(CustomerController::class)->group(function () {
    Route::get('/customers','index')->name('customers.index');
    Route::post('/customers/store','store')->name('customers.store');
    Route::get('/customers/{id}/edit','edit')->name('customers.edit');
    Route::get('/customers/{id}/show','show')->name('customers.show');
    Route::post('/customers/{id}/delete','destroy')->name('customers.destroy');
});

Route::get('/teachers',[TeacherController::class,'index'])->name('teachers.index');
Route::post('/teachers/store',[TeacherController::class,'store'])->name('teachers.store');
Route::get('/teachers/{id}/edit',[TeacherController::class,'edit'])->name('teachers.edit');
Route::get('/teachers/{id}/show',[TeacherController::class,'show'])->name('teachers.show');
Route::post('/teachers/{id}/delete',[TeacherController::class,'destroy'])->name('teachers.destroy');


// });











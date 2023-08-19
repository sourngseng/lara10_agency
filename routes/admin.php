<?php
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    //Manage Services
    // Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services');
    // Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');

    Route::controller(ServiceController::class)->group(function () {
      Route::get('/admin/services','index')->name('services.index');
      Route::post('/admin/services/store','store')->name('services.store');
      Route::get('/admin/services/create','create')->name('services.create');
      Route::get('/admin/services/{id}/edit','edit')->name('services.edit');
      Route::get('/admin/services/{id}/show','show')->name('services.show');
      Route::post('/admin/services/{id}/delete','destroy')->name('services.destroy');
  });


  //teams
  Route::controller(TeamController::class)->group(function () {
    Route::get('/admin/teams','index')->name('teams.index');
    Route::post('/admin/teams/store','store')->name('teams.store');
    Route::get('/admin/teams/create','create')->name('teams.create');
    Route::get('/admin/teams/{id}/edit','edit')->name('teams.edit');
    Route::get('/admin/teams/{id}/show','show')->name('teams.show');
    Route::post('/admin/teams/{id}/delete','destroy')->name('teams.destroy');
});



  // About
    Route::controller(AboutController::class)->group(function () {
      Route::get('/admin/abouts','index')->name('abouts.index');
      Route::post('/admin/abouts/store','store')->name('abouts.store');
      Route::get('/admin/abouts/create','create')->name('abouts.create');
      Route::get('/admin/abouts/{id}/edit','edit')->name('abouts.edit');
      Route::get('/admin/abouts/{id}/show','show')->name('abouts.show');
      Route::post('/admin/abouts/{id}/delete','destroy')->name('abouts.destroy');
    });



});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

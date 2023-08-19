<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;

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


  });

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

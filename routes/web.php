<?php


use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/test', function () {
    return view('app.test.user');
})->name('test.admin');

Route::resource('users', UserController::class);
Route::resource('my-panel', UserTicketController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tenants', TenantController::class);
Route::resource('configurations', ConfigurationController::class);


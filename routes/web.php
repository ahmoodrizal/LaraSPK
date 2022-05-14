<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Project
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');
Route::post('dashboard/create', [DashboardController::class, 'store'])->name('dashboard.store');
Route::get('dashboard/{project}', [DashboardController::class, 'show'])->name('dashboard.show');

// Project Alternative
Route::get('dashboard/{project}/create-alternative', [DashboardController::class, 'createAlt'])->name('dashboard.createAlt');
Route::post('dashboard/{project}/create-alternative', [DashboardController::class, 'storeAlt'])->name('dashboard.storeAlt');
Route::get('dashboard/{project}/{alternative}/edit-alternative', [DashboardController::class, 'editAlt'])->name('dashboard.editAlt');
Route::put('dashboard/{project}/{alternative}/edit-alternative', [DashboardController::class, 'updateAlt'])->name('dashboard.updateAlt');

// Project Criteria
Route::get('dashboard/{project}/create-criteria', [DashboardController::class, 'createCrt'])->name('dashboard.createCrt');
Route::post('dashboard/{project}/create-criteria', [DashboardController::class, 'storeCrt'])->name('dashboard.storeCrt');
Route::get('dashboard/{project}/{criteria}/edit-criteria', [DashboardController::class, 'editCrt'])->name('dashboard.editCrt');
Route::put('dashboard/{project}/{criteria}/edit-criteria', [DashboardController::class, 'updateCrt'])->name('dashboard.updateCrt');

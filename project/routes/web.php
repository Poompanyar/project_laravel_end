<?php

use App\Http\Controllers\PopulationController;
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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('form', function () {
    return view('form');
});

Route::get('/', [PopulationController::class, 'puData']);

Route::post('addCountry', [PopulationController::class, 'addCountry'])->name('addCountry');

Route::get('delete/{id}', [PopulationController::class, 'delete'])->name('delete');

Route::get('edit/{id}', [PopulationController::class, 'edit'])->name('edit');

Route::post('UpdateCountry/{id}', [PopulationController::class, 'UpdateCountry'])->name('UpdateCountry');

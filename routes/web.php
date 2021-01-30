<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsentController;
use RealRashid\SweetAlert\Facades\Alert;
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

/* Route::get('/', function () {
    Alert::info('Title', 'Success');
    return view('welcome');
}); */
Route::get('dashboard', [ConsentController::class, 'index']);
// Route::get('dashboard/create', [ConsentController::class, 'create']);
Route::post('dashboard/add', [ConsentController::class, 'store'])->name('consents.insert');
Route::get('dashboard/show', [ConsentController::class, 'show'])->name('consents.show');



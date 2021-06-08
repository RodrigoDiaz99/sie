<?php

use App\Http\Controllers\StudentsController;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('registro', 'StudentsController');
Route::resource('subject', SubjectsController::class);
Route::resource('Score', ScoreController::class);


Route::get('/studentSubject/{id}', 'StudentsController@subjects')->name('studentSubject');
Route::post('/studentSubject/loadSubject/{id}', 'StudentsController@loadSubject')->name('loadSubject');

Route::get('/studentScore/{id}', 'StudentsController@score')->name('studentScore');

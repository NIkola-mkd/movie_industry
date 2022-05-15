<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CriticsController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\OscarController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');


Route::resource('genre', GenreController::class);
Route::resource('directors', DirectorController::class);
Route::resource('movies', MoviesController::class);
Route::resource('films', FilmController::class);
Route::resource('series', SeriesController::class);
Route::resource('actors', ActorController::class);
Route::resource('plays', PlayController::class);
Route::resource('oscars', OscarController::class);
Route::resource('ratings', RatingController::class);
Route::resource('grades', GradeController::class);
Route::resource('critics', CriticsController::class);
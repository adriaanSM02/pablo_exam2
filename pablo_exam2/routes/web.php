<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharactersController;

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
    return view('welcome');
});

Route::get('/characters', [CharactersController::class, 'index'])->name('characters');

Route::get('/charactersmorehp', [CharactersController::class, 'charMore'])->name('charactersmorehp');

Route::get('/characterslesshp', [CharactersController::class, 'charLess'])->name('characterslesshp');

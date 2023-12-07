<?php

use App\Http\Controllers\Controller;
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
    return view('landing');
});

Route::get('binding', [Controller::class, 'demoBinding']);
Route::get('data-type', [Controller::class, 'demoDataType']);
Route::get('oop-paradigm', [Controller::class, 'demoOOP']);

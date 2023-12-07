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

Route::view('/', 'landing');

// Numbers 1 to 4 [Gregg]
Route::view('web-centric', 'demos.web-centric');
Route::view('server-side', 'demos.server-side-scripting');
Route::view('easy-integration', 'demos.easy-integration');
Route::get('procedural-object-oriented', [Controller::class, 'demoProceduralObject']);

// Numbers 5-8 [Lancelot]
Route::get('error-handling', [Controller::class, 'errorHandling']);
Route::get('database-demo', [Controller::class, 'databaseDemo']);

// Numbers 9 to 12 [Jay]
Route::get('binding', [Controller::class, 'demoBinding']);
Route::get('data-type', [Controller::class, 'demoDataType']);
Route::get('oop-paradigm', [Controller::class, 'demoOOP']);

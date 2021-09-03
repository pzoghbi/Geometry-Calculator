<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeometryController;

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

Route::get('/', [GeometryController::class, 'MainScreen']);
Route::get('/triangle', [GeometryController::class, 'CreateTriangle']);
Route::get('/circle', [GeometryController::class, 'CreateCircle']);

Route::get('/triangle/{a}/{b}/{c}', [GeometryController::class, 'Triangle']);
Route::get('/circle/{radius}', [GeometryController::class, 'Circle']);

Route::get('/combine', [GeometryController::class, 'GetCombine']);
Route::get('/combine/triangle', [GeometryController::class, 'CreateTriangle']);
Route::get('/combine/circle', [GeometryController::class, 'CreateCircle']);
Route::get('/combine/{o1}/{o2}', [GeometryController::class, 'Combine']);

Route::get('/combine/triangle/{a}/{b}/{c}', [GeometryController::class, 'Triangle']);
Route::get('/combine/circle/{a}/{b}/{c}', [GeometryController::class, 'Circle']);

Route::get('/result/{object}', [GeometryController::class, 'Result']);

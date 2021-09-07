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
Route::get('/getshapes', [GeometryController::class, 'GetShapes']);
Route::get('/combine/{o1}/{o2}', [GeometryController::class, 'Combine']);

Route::get('/result/{object}', [GeometryController::class, 'Result']);

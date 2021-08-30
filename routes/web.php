<?php

use Illuminate\Support\Facades\Route;
use App\Models\Circle;
use App\Models\Triangle;

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

Route::get('/triangle/{a}/{b}/{c}', function ($a, $b, $c) {
    $triangle = new Triangle($a, $b, $c);
    header('Content-Type: application/json');
    return '<pre>' . json_encode($triangle, JSON_PRETTY_PRINT) . '</pre>';
});

Route::get('/circle/{radius}', function ($radius) {
    $circle = new Circle($radius);
    header('Content-Type: application/json');
    return '<pre>' . json_encode($circle, JSON_PRETTY_PRINT) . '</pre>';
});

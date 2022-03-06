<?php

use App\Http\Controllers\daraController;
use App\Http\Controllers\homeController;
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
    return view('welcome');
});
Route::get('/members', [daraController::class, 'getAllMember']);
Route::match(['post', 'get'], '/form', [daraController::class, 'formA']);
Route::post('/process-form', [daraController::class, 'process_form']);

Route::get('/homepage', [homeController::class, 'home']);

Route::get('/aboutUs', [homeController::class, 'aboutUs']);

Route::get('/stores', [homeController::class, 'store']);

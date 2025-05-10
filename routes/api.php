<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('user/login', [App\Http\Controllers\UserLoginController::class, 'store'])
    ->name('user.login');
Route::get('/users/get', [\App\Http\Controllers\UserLoginController::class, 'index']);


Route::post('user/register', [App\Http\Controllers\UserLoginController::class, 'register'])
    ->name('user.register');

Route::post('/buses/store', [\App\Http\Controllers\BusController::class, 'store']);

Route::get('/buses/get', [App\Http\Controllers\BusController::class, 'index']);

Route::post('/bus-journals/store', [\App\Http\Controllers\BusJournalController::class, 'store']);
Route::post('/bus-journals/get', [\App\Http\Controllers\BusJournalController::class, 'index']);


Route::post('/bus-locations/store', [\App\Http\Controllers\BusLocationControllerController::class, 'store']);
Route::get('/bus/{id}/last-location', [App\Http\Controllers\BusLocationControllerController::class, 'lastLocation']);




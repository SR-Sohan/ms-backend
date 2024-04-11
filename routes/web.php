<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Auth Routes
Route::get('/login',[Authcontroller::class,'page']);


Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class,'page']);
});
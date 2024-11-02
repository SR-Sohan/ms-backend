<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
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
    return view('client/home');
});


// Auth Routes
Route::get('/login',[Authcontroller::class,'page']);
Route::post('/user-login',[Authcontroller::class,'UserLogin']);
Route::get('/logout',[Authcontroller::class,'UserLogOut']);


Route::prefix('admin')->middleware('verifytoken')->group(function () {


    Route::get('/', [DashboardController::class,'page']);


    // Home Controller
    Route::get("home",[HomeController::class,'page']);


    // Blog Route
    Route::get('blog', [BlogController::class,'page']);
    Route::get('blog-list', [BlogController::class,'blogList']);
    Route::get('blog-by-id/{id}', [BlogController::class,'blogById']);
    Route::post('blog-create-update', [BlogController::class,'blogCreateUpdate']);
    Route::post("blog-delete",[BlogController::class,"blogDelete"]);


    // About Route
    Route::get('about',[AboutController::class,'page']);


    // Cetificate Route
    Route::get('certificate',[CertificateController::class,'page']);
    Route::get('certificate-list',[CertificateController::class,'certificateList']);
    Route::get('certificate-by-id/{id}',[CertificateController::class,'certificateById']);
    Route::post('certificate-create-update',[CertificateController::class,'certificateCreateUpdate']);
    Route::post('certificate-delete',[CertificateController::class,'certificateDelete']);

    // Social Route
    Route::get('social',[SocialController::class,'page']);
    Route::get('social-list',[SocialController::class,'socialList']);
    Route::get('social-by-id/{id}',[SocialController::class,'socialById']);
    Route::post('social-create-update',[SocialController::class,'socialCreateUpdate']);
    Route::post('social-delete',[SocialController::class,'socialDelete']);



});
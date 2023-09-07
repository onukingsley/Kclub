<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[HomeController::class,'index']);
Route::get('/login',[UserController::class,'login']);
Route::get('/signup',[UserController::class,'signup']);
Route::post('/store',[UserController::class,'store']);
Route::post('/authenticate',[UserController::class,'authenticate']);
Route::get('/logout',[UserController::class,'logout']);


//single event
Route::get('/eventsingle/{event}',[EventController::class,'show']);

//Stripe payment
Route::get('stripe/{event}',[StripePaymentController::class, 'stripe']);
Route::post('stripe/{event}',[StripePaymentController::class, 'stripePost'])->name('stripe.post');

//backend dashboard
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/admin/dashboard',[AdminController::class,'index']);



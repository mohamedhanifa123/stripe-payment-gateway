<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

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
Route::get('index',[StripeController::class,'index'])->name('index');
Route::post('index',[StripeController::class,'store'])->name('index');
Route::get('/stripe-payment', [StripeController::class, 'handleGet'])->name('stripe.payment');
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');
Route::post('payment',[StripeController::class,'Payment'])->name('payment.store');
Route::get('detail',[StripeController::class,'detail']);
Route::get('/home1',[StripeController::class,'home']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\PaymentController;
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

Route::post('/khalti/payment/verify',[PaymentController::class,'verifyPayment'])->name('khalti.verifyPayment');

Route::post('/khalti/payment/store',[PaymentController::class,'storePayment'])->name('khalti.storePayment');

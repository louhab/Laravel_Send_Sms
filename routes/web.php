<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController ;


Route::view('/', 'welcome');
Route::post('/send_sems', [TestController::class, 'sendSMS'])->name('send_sms') ;



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('home');
});

Route::get('/todo', function () {
    return view('todo');
});

Route::post('/send-email', [MailController::class, 'maildata']);
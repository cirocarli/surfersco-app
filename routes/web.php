<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('home');
});

Route::get('/todo', function () {
    return view('todo');
});

// Route::get('/home', [MailController::class, 'mailform']);
// Route::get ('/',[MailController::class,'mailform']);

// Route::post ('/send-mail',[MailController::class,'maildata'])->name('send_mail');
Route::post('/todo', [MailController::class, 'maildata'])->name('send_mail');
// Route::get('send-mail', [MailController::class, 'maildata'])->name('send_mail');

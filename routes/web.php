<?php

use App\Http\Controllers\PHPMailerController;
use Illuminate\Support\Facades\Route;

// Route::view('/','pages.home');
Route::view('/','pages.homenew');

Route::post('/mail',[PHPMailerController::class,'mail']);
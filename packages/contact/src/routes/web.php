<?php

use Illuminate\Support\Facades\Route;

//Route::get('contact', function (){
//    return view(__DIR__.'/../views/home');
//});
Route::get('contact', [\robinNcode\Contact\Controllers\HomeController::class, 'index']);

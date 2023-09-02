<?php


// use Illuminate\Support\Facades\Route;


  Route::get('/example/stamper', [\Stamper\Http\Controllers\StamperMainController::class, 'index']);

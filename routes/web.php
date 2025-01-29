<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    ray('Hola Oscar');
    return view('welcome');
});

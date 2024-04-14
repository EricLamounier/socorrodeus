<?php

use App\Http\Controllers\Livro;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

Route::get('/', function () {
    return view('welcome');
});
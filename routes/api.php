<?php

use App\Http\Controllers\Livro;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

Route::get('/', function () {
    return view('welcome');
});

//grupo livro
Route::group(['prefix' => 'livro'], function (){
    Route::post('teste', [Livro::class, 'saveLivro']);
});
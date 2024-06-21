<?php

use App\Http\Controllers\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;


Route::get('/x', function () {
    return 'o';
});

Route::group(['prefix'=>'pessoa'], function(){
    Route::post('/create', [Pessoa::class, 'cadastraPessoa']);
});

<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });
Route::get('/',function(){
    return view ('home');
});
Route::get('/clientes',function(){
    return view('clientes');
});

Route::get('/produtos',function(){
    return view('produtos');
});
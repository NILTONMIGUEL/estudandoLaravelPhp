<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view ('home');
})->name('home');

Route::get('/adm',function(){
    return view('login');
})->name('login');

//fazendo ser restrito apenas com login
Route::middleware('auth')->group(function(){
    Route::get('/painel',function(){
        return view('layouts.admin');
    })->name('painel');

    //criando a rota logout para voltar a tela de login
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});



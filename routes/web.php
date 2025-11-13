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
        return view('admin.dashboard');
    })->name('painel');

    //criando a rota para usuários
    Route::get('/usuarios',function(){
        return view('admin.usuarios');
    })->name('usuarios');

    //criando a rota de produtos
    Route::get('/produtos',function(){
        return view('admin.produtos');
    })->name('produtos');
    
    //criando a rota logout para voltar a tela de login
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});



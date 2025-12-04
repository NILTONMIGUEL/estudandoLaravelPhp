@extends('layouts.admin')
@section('title','- Usuários')
@section('conteudo')
    @if(Route::currentRouteName() == 'usuarios-cadastrar')
        <h1>Cadastro de Usuario</h1>
        @livewire('criar-usuarios')
    @else
        <h1>Editar Usuario</h1>
        @livewire('criar-usuarios',['user' => $user])
    @endif
@endsection

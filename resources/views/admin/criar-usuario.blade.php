@extends('layouts.admin')
@section('title','- Usuários')
@section('conteudo')
    @if(Route::currentRouteName() == 'usuarios-cadastrar')
        @livewire('criar-usuarios')
    @else
        @livewire('criar-usuarios',['user' => $user])
    @endif
@endsection

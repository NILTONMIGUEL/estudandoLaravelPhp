@extends('layouts.admin')

@section('title','- Painel')

@section('conteudo')
    <h4>Bem vindo a área administrativa {{Auth::user()->name }}</h4>
    <p>hoje são {{date('d/m/y')}}</p>
@endsection
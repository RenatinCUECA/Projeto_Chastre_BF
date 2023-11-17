@extends('layouts.main')

@section('title', 'Pé de Moleque - Produto')

@section('content')

<h1>Tela de produtos</h1>

@if($busca != '') 
    <p>O usuário está procurando por: {{ $busca }}</p>

@endif

@endsection
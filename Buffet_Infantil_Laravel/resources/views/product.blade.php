@extends('layouts.main')

@section('title', 'Pé de Moleque - Produto')

@section('content')

    @if($id != null)
        <p>Exibindo produto id: {{$id}}</p>
    @endif

@endsection
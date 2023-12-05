@extends('layouts.main')

@section('title', 'Pé de Moleque - Buffet')

@section('class', 'buffet')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('CSS/estilo.css')}}">
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Editar Buffet</h2>
            </div>
        </div>
    </div>

    <form action="{{route('buffets.update', $buffet->id)}}" method="POST">
        @csrf()
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" class="form-control" value="{{$buffet->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cardápio:</strong>
                    <textarea name="description" cols="30" rows="5"> {{$buffet->description}} </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="number" name="price" class="form-control" value="{{$buffet->price}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>

@endsection
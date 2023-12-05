@extends('layouts.main')

@section('title', 'Pé de Moleque - Buffet')

@section('class', 'buffet')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Opções de Buffet</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('buffets.create') }}"> Criar novo Buffet</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Cardápio</th>
                <th>Preço por pessoa</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buffets as $buffet)
                <tr>
                    <td>{{ $buffet->id }}</td>
                    <td>{{ $buffet->name }}</td>
                    <td>{{ $buffet->description }}</td>
                    <td>{{ $buffet->price }}</td>
                    <td>
                        <form action="{{route('buffets.destroy', $buffet->id)}}" method="post">
                            <a class="btn btn-primary" href="{{route('buffets.edit', $buffet->id)}}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
@extends('layouts.main')

@section('title', 'Pé de Moleque - Home')

@section('class', 'home')

@section('content')

   <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Suas reservas</h2>
        <p class="subtitle">
            Veja as suas reservas e organize seu evento!
        </p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="../img/events/{{ $event -> image}}" alt="{{ $event -> nome}}">
                    <div class="card-body">
                        <h5 class="card-date"><ion-icon name="calendar-outline"></ion-icon>{{date('d/m/Y', strtotime($event -> date)) }}</h5>
                        <div class="card-nome">{{$event -> nome}}</div>
                        <p class="card-idade"><ion-icon name="balloon-outline"></ion-icon>{{ $event -> idade}}</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0)
            <p>Você não reservou nenhum buffet ainda <ion-icon name="sad-outline"></ion-icon></p>
            @endif
        </div>
    </div>


@endsection
@extends('layouts.main')

@section('title', $event->nome)

@section('class', 'home')

@section('content')


<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->nome}}">
        </div>
        <div id="info-container" class="col-md6">
            <h1>{{ $event->nome }}</h1>
            <p class="event-date"><ion-icon name="calendar-outline"></ion-icon> {{ $event->data }} </p>
            <p class="event-hora"><ion-icon name="time-outline"></ion-icon>{{ $event->hora }}</p>
            <p class="event-buffet"><ion-icon name="fast-food-outline"></ion-icon>{{ $event->buffet }}</p>
            <p class="event-qtd_convidados"><ion-icon name="people-outline"></ion-icon>{{ $event->qtd_convidados }}</p>
            <p class="event-idade"><ion-icon name="balloon-outline"></ion-icon>{{ $event->idade }}</p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
        </div>
        <div class="col-md-12" id="editor-container">
           <h3>Buffet personalizado:</h3> 
           <p class="event-editor"><ion-icon name="brush-outline"></ion-icon>{{ $event->editor }}</p>
        </div>
    </div>
</div>

@endsection
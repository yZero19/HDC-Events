@extends('layouts.main') <!-- substituir main pelo layout que queira usar-->

@section ('title', $event->title)

@section ('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="com-md-6">
            
        <img src="/image/{{$event->image}}"  class="img-fluid"alt="/image/{{$event->title}}"

        </div>
    <div id="info-container" class="col-md-6">
        <h1>{{ $event->title}}</h1>
        <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event -> city}}</p>
        <p class="event-participants"><ion-icon name="people-outline"></ion-icon> x participantes</p>
        <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Dono Do Evento</p>
        <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
    </div>
    <br>
    <div class="col-md-12" id="decription-event">
        <h3> Sobre o Evento </h3>
        <p class="event-description">{{ $event->descrition}}</p>
    </div>
    </div>
</div>
@endsection

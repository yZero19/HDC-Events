@extends('layouts.main') <!-- Substitua 'main' pelo layout que deseja usar -->

@section('title', $event->title)

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
    <div id="image-container" class="col-md-6">
        <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
      </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
            <p class="event-participants"><ion-icon name="people-outline"></ion-icon> {{ count($event->users) }} participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> {{ $eventOwner ['name'] }}</p>
            @if(!$hasUserJoined)
            <form action="/events/join/{{ $event->id }}" method="POST">
                @csrf
            <a href="/events/join/{{ $event->id }}" 
            class="btn btn-primary"
            onclick="event.prevetDefault();
            this.closet('form').submit();" 
            id="event-submit">
            Confirmar Presença
            </a>
            </form>
            @else

            <p class="already-joined-msg">Você ja esta participando desse Evento</p>
            @endif
            <h3>O Evento Conta Com:</h3>
            <ul id="items-list">
            @if($event->items)
                @foreach($event->items as $item)
                <li><ion-icon name="play-outline"></ion-icon><span> {{ $item }} </span></li>
                @endforeach
            @else
                <li>Nenhum item disponível.</li>
            @endif
            </ul>
            <div class="col-md-10" id="description-event">
            <h3>Sobre o Evento</h3>
            <p class="event-description">{{ $event->descrition }}</p>
        </div>
        </div>
        <br>
        
    </div>
</div>
@endsection

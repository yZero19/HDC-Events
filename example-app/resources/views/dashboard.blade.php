@extends('layouts.main') <!-- Substitua 'main' pelo layout que deseja usar -->

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 pffset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="com-md-10 offset dashboard-events-container">
@if(count($events?? []) > 0)
    @else
    <p>Você ainda não possui eventos, <a href="/events/create"> Criar Evento </a></p>
    @endif
</div>
@endsection
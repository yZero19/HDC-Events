@extends('layouts.main') <!-- Substitua 'main' pelo layout que deseja usar -->

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset dashboard-events-container">
    @if(count($events?? []) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td scope="row">{{$loop->index + 1}}</td>
                <td><a href="/events/{{$event->id}}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td><a href="/events/edit/{{$event->id}}" type="button" class="btn btn-info"><ion-icon name="create-outline"></ion-icon>Editar</a> 
                <form action="/events/{{ $event->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar </button>
                </form>        
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não possui eventos, <a href="/events/create">Criar Evento</a></p>
    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Presença Confirmada</h1>
</div>

<div class="col-md-10 offset dashboard-events-container">

   @if(count($eventsAsParticipant )> 0)

   <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventsAsParticipant as $event)
            <tr>
                <td scope="row">{{$loop->index + 1}}</td>
                <td><a href="/events/{{$event->id}}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <form action="/events/leave/{{ $event->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Sair Do Evento</button>
                </form></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
   @else
   <p>Você ainda não confirmou presença em nenhum evento, <a href"/"> veja todos os eventos</a></p>
@endif
</div>

@endsection

@extends ('layouts.main')

@section ('title', 'HDC Events')

@section ('content')

<div class="search-container col-md-12">
    <h1>Busque um Evento</h1>
    <br>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div class="row cards-container">
        @foreach($events as $event)
        <div class="card col-md-4">
            <img src="/img/plateia.jpg" alt="{{ $event->title}}">
            <div class="card-body">
                <p class="card-date">10/09/2020</p>
                <h5 class="card-title">{{ $event->title}}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

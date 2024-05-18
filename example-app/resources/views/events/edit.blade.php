@extends('layouts.main') <!-- Substitua 'main' pelo layout que deseja usar -->

@section('title', 'editar')

@section('content')

<hr>
<div id="event-create-container" class="col-md-03">
    <h1>Editando : {{ $event -> title}}</h1> <br><br>
    <form action="/events/update/{{ $event->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-2">
      <label for="image">Imagem do Evento:</label><br>
      <input class="form-control" type="file" id="image" name="image">
      <img src="/img/events/{{ $event -> image}}" alt="{{$event->title}}" class="img-preview">
        <div>
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo" value="{{ $event->title}}">
        </div><br>
        <div class="mb-2">
      <label for="date">Data Do Evento:</label><br>
      <input class="form-control" type="date" id="date" name="date"  value="{{date('Y-m-d', strtotime($event->date));}}"></div><br>
        <div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local Do Evento" value="{{$event->city}}">
        </div><br>
        <div class="form-group">
            <label for="title">O Evento é Privado ?</label>
            <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1" {($event->private == 1 ? "selected='selected'" : "")}>Sim</option>
            </select>
           </div><br>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descrition" id="descrition" class="form-control" placeholder="O que vai acontecer no evento">{{$event->descrition}}</textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="title">Adicione items de infraestrutura</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeira <br>
                <input type="checkbox" name="items[]" value="Palco"> Palco <br>
                <input type="checkbox" name="items[]" value="Open Bar"> Open Bar <br>
                <input type="checkbox" name="items[]" value="Buffet"> Buffet <br>
                <input type="checkbox" name="items[]" value="Brindes"> Brindes <br>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>
@endsection
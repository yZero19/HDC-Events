@extends('layouts.main') <!-- substituir main pelo layout que queira usar-->

@section ('title', 'Criar Eventos')

@section ('content')



<div id="event-create-container" class="col-md-03">
    <h1>Crie O Seu Evento</h1> <br><br>
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-2">
      <label for="image">Imagem do Evento:</label><br>
      <input class="form-control" type="file" id="image" name="image"></div><br>
        <div>
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome Do Evento">
        </div><br>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local Do Evento">
        </div><br>
        <div class="form-group">
            <label for="title">O Evento é Privado ?</label>
            <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
            </select>
           </div><br>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descrition" id="descrition" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
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
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>






@endsection
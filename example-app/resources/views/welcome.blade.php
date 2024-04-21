@extends ('layouts.main')

@section ('title', 'HDC Events')

@section ('content')


@foreach($events as $event) <!-- buscando os valores da tabela  -->

<p>{{$event->title}} -- {{$event->descrition}}</p>

@endforeach
@endsection

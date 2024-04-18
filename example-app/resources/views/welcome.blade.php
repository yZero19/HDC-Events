@extends ('layouts.main')

@section ('title', 'HDC Events')

@section ('content')
<h1>titulo 1</h1>
    @if(10>5)
    <p>a condiçaõ é true </p>
    @endif

    <p> {{$nome}} </p> <!-- utilizando variavel declarada em routas anteriormente -->

    <img src="/img/plateia.jpg" alt="plateia">
    {{-- Comentario em blade (não impresso na tela) --}}

@endsection
@extends('layouts.main') <!-- substituir main pelo layout que queira usar-->

@section ('title', 'Produtos')

<h1>Pagina De Produtos</h1>


@section ('content')

@if ($busca != '')
<p> usuario esta buscando : {{$busca}} </p>
@endif





@endsection
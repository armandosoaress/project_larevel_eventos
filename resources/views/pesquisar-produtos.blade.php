@extends('layouts.main')
@section('titulo','produto')

@section('corpo')

<h1>pesquisar produtos</h1>

@if($busca !=' ')
<h3>o usario está buscando por: {{$busca}}</h3>
@endif

@endsection





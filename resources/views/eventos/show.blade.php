@extends('layouts.main')

@section('titulo',$evento->titulo)

@section('corpo')

<div class="col-md-10 offset-md-1">

<div class="row">

<div id="image-container" class="col-md-6">
<img src="/img/eventos/{{$evento->image}}" class="img-fluid" alt="{{$evento->titulo}}">
</div>
<div id="info-container" class="col-md-6">
<h1>{{$evento->titulo}}</h1>
<p class="event-city"><ion-icon name="pin"></ion-icon>{{$evento->cidade}}</p>
<p class="event-participantes"><ion-icon name="contacts"></ion-icon>x participantes</p>
<p class="event-participantes"><ion-icon name="contacts"></ion-icon>{{ $dono['name'] }}</p>

<a href="" class="btn btn-primary" id="event-submit">confirmar presença</a>
<h3>o evento conta com :</h3>
<ul id="list-group">
    @foreach($evento->items as $item)
    <li class="list-group-item"><ion-icon name="play"></ion-icon>{{$item}}</li>
    @endforeach
</ul>
</div>
<div class="col-md-12" id="description-container">
    <h3>sobre o evento</h3>
    <p class="event-description">{{$evento->descricao}}</p>
</div>
</div>
</div>

@endsection

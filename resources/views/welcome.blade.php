@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
     <div id="search-container" class="col-md-12">
         <h1>Busque um evento</h1>
        
         <form action="/" method="GET">
             <input type="text" id='search' name='search' class='form-control' placeholder='pesquisar...'>
         </form>
     </div>
     <div id="events-container" class="col-md-12">
         @if($search)
         <h2>Bucando por:{{$search}}</h2>
         @else
         <h2>Proximos eventos</h2>
         @endif


         @if(count($eventos) == 0 && $search)
        <p class='subtitele'>não foi encontrado nenhum registro para: {{$search}} <a href="/">voltar para todos</a></p>
        @elseif(count($eventos)==0)
        <p class='subtitele'>não existem nenhum evendo no banco </p>
         @endif

         <p class='subtitele'>Veja os eventos dos proximos dias </p>
         <div id="cards-container" class='row'>
             @foreach($eventos as $evento)
            <div class="card col-md-3">
                
             <img src="/img/eventos/{{$evento->image}}" alt="{{$evento->titulo}}">
              <div id="card-body">
                  <p id="card-date">{{date('d/m/y', strtotime($evento->date))}}</p>
                  <h5 id="card-title"> {{$evento->titulo}}</h5>
                  <p id="card-participants">x participantes</p>
                  <a href="/eventos/{{$evento->id}}" class="btn btn-primary">saber mais</a>
              </div>
            </div>
             @endforeach()

         </div>
     </div>


  @endsection


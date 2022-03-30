@extends('layouts.main')
@section('titulo','criar eventos')
@section('corpo')

<div id="event-create-container" class="col-md-6 offset-md-3">
     <h1>crie seu evento</h1>     
     <form action="/envent" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">imagem do evento:</label>
          <input type="file" id="image" name="image"  class="form-control-file">
         </div>
         <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="titulo" placeholder="nome do evento">
         </div>
         <div class="form-group">
            <label for="date">data:</label>
            <input type="date" class="form-control" id="date" name="date">
         </div>
         <div class="form-group">
            <label for="title">cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade do evento">
         </div>
         <div class="form-group">
            <label for="title">O evento e privado?:</label>
            <select id="privado" name="privado" class="form-control" >
               <option value="0">não</option>
               <option value="1">sim</option>
         </div>
         <div class="form-group">
            <label for="title">descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" placeholder="descrição do evento"></textarea>
         </div>
         
         <div class="form-group">
            <label for="title">adicione intens de infraestrutura:</label>
               <div class="form-grou">
                  <input type="checkbox" name="items[]" value="cadeiras" id="cadeiras">cadeiras
                  <input type="checkbox" name="items[]" value="pauco" id="pauco">pauco
                  <input type="checkbox" name="items[]" value="cervejagratis" id="cervejagratis">cervejagratis
                  <input type="checkbox" name="items[]" value="brinds" id="brinds">brinds
               </div>
         </div>
       
       
         <input type="submit" class="btn btn-primary" value="criar evento">

     </form>
     </div>
  @endsection


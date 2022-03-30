<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;

class envent extends Controller
{
    public function index()
    {

        $search= request('search');

        if ($search) {
            $eventos = Evento::where([
                ['titulo','like','%'.$search.'%'] 
            ])->get();
        } else {
               $eventos = Evento::all();
        }

          return view('welcome',
           [
                'eventos'=> $eventos,'search'=>$search
            ]);
    }

    public function criar()
    {

        return view('eventos.criar');
      
      
    }

 


    public function store(request $request)
    {

        $evento=new Evento;

       

        $evento->titulo=$request->titulo;
        $evento->cidade=$request->cidade;
        $evento->privado=$request->privado;
        $evento->descricao=$request->descricao;
        $evento->items=$request->items;
        $evento->date=$request->date;
        $user=auth()->user();
        $evento->user_id = $user->id;
      

        //uploard da imagem
        if ($request->hasfile('image') && $request->file('image') -> isValid()) {

            $requestimage=$request->image;

            $extencion= $requestimage->extension();

            $imagename=md5($requestimage->getClientOriginalName().strtotime("now")).".".$extencion;

            $request->image->move(public_path('img/eventos'),$imagename);
                 
            $evento->image=$imagename;
            
        }

        



        $evento->save();

       return redirect('/')->with('msg','evento criado com susseso');

      
    }

    
    public function show($id)
    {

       

        $eventos = Evento::findOrFail($id);

        $dono=user::where('id',$eventos->user_id)->first()->toArray();
    
        return view('eventos.show', [
            "evento"=>$eventos,
            "dono"=>$dono,
        ]);


         }
}


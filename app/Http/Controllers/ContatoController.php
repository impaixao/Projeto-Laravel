<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria","tel"=>"6564773"],
            (object)["nome"=>"Pedro","tel"=>"6444444"]
        ];

        $contato = new Contato();
        //dd($contato->lista());
        $con = $contato->lista();
        dd($con->nome);

        return view ('contato.index',compact('contatos'));
    }

    public function criar(Request $req)
    {
        //dd($req['nome']);
        dd($req->all());
        return "Esse é o Criar do controller de Contato";
    }

    public function editar()
    {
        return "Esse é o Editar do controller de Contato";
    }
}

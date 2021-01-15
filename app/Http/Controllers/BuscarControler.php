<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscarControler extends Controller
{
    public function listar_por($categoria){
        //return view('buscar.listar')->with ('categoria_id',$categoria_id);
        return view('buscar.listar', compact('categoria'));
    }
}

<?php

namespace App\Http\Controllers\misControladores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormularioController extends Controller
{
    public function mostrarFormulario(){

    	$contenido = '';

    	return view('misVistas.formulario', ['contenido' => $contenido]);
    }

    public function mostrarTexto(Request $request){

    	$contenido = $request->areaTexto;

    	return view('misVistas.formulario', ['contenido' => $contenido]);
    }
}

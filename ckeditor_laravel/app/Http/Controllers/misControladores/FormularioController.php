<?php

namespace App\Http\Controllers\misControladores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormularioController extends Controller
{
    public function mostrarFormulario(){
    	return view('misVistas.formulario');
    }
}

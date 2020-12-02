<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ControladorRutas extends Controller
{
    public function index () { return view( 'bienvenida' ); }
    public function citas () { return view( 'citas' ); }
    public function contacto () { return view( 'forms.contacto' ); }
    public function login () { return view( 'auth.login' ); }

    public function servicios () { 

        $servicios = DB::table('servicio')->get();
        return view( 'servicios',[
            'servicios' => $servicios
        ] ); 
    }

    public function agendar_cita () { return view( 'forms.agendar_cita' ); }
    public function direcciones () {
        
        $direcciones = DB::table('direccion')->get();
         return view( 'direcciones', [
             'direcciones' => $direcciones
         ] ); 
    }
    public function agregar_direccion () {
        $id = Auth::id();
         return view( 'forms.agregar_direccion'); 
    }
}

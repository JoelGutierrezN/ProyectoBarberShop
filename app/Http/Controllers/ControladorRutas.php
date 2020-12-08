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

    public function agendar_cita ($id) { 
        $direcciones = DB::table('users')
        ->join('direccion', 'direccion.id', '=', 'users.direccion_id')
        ->join('estado', 'direccion.estado_id', '=', 'estado.id')
        ->join('municipio', 'estado.id', '=', 'municipio.id')
        ->select(
         'direccion.calle',
         'direccion.num_ext',
         'direccion.num_int',
         'direccion.colonia',
         'direccion.codigo_postal',
         'municipio.nombre',
         'estado.nombre_estado')
        ->where('users.id', '=', $id)->get();

        $user = DB::table('users')->where('id', '=', $id)->first();
        $tickets = DB::table('detalle_servicio')->orderBy('id', 'desc')->first();
        $servicios = DB::table('servicio')->get();

        $direcciones = DB::table('users')
        ->join('direccion', 'direccion.id', '=', 'users.direccion_id')
        ->join('estado', 'direccion.estado_id', '=', 'estado.id')
        ->join('municipio', 'estado.id', '=', 'municipio.id')
        ->select(
         'direccion.id',
         'direccion.calle',
         'direccion.num_ext',
         'direccion.num_int',
         'direccion.colonia',
         'direccion.codigo_postal',
         'municipio.nombre',
         'estado.nombre_estado')
        ->where('users.id', '=', $id)->get();

        return view( 'forms.agendar_cita',[
            'direcciones' => $direcciones,
            'user' => $user,
            'tickets' => $tickets,
            'servicios' => $servicios,
            'direcciones' => $direcciones
        ]); 
    }

    public function direcciones ($id) {
        
        $direcciones = DB::table('users')
        ->join('direccion', 'direccion.id', '=', 'users.direccion_id')
        ->join('estado', 'direccion.estado_id', '=', 'estado.id')
        ->join('municipio', 'estado.id', '=', 'municipio.id')
        ->select(
         'direccion.calle',
         'direccion.num_ext',
         'direccion.num_int',
         'direccion.colonia',
         'direccion.codigo_postal',
         'municipio.nombre',
         'estado.nombre_estado')
        ->where('users.id', '=', $id)->get();

         return view( 'direcciones', [
             'direcciones' => $direcciones
         ] ); 
    }

    public function agregar_direccion () {
        $id = Auth::id();
        $estados = DB::table('estado')->orderBy('nombre_estado','asc')->get();
        return view( 'forms.agregar_direccion',[
            'estados' => $estados
        ]); 
    }

    public function perfil () {
        $id = Auth::id();
        $datos = DB::table('users')->where('id', '=', $id)->first();
         return view( 'perfil',[
             'datos' => $datos
         ]); 
    }
}

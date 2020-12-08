<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BDController extends Controller
{
    public function citas($id){
        $citas = DB::table('detalle_servicio')
            ->join('users', 'detalle_servicio.cliente_id', '=', 'users.id')
            ->join('cita', 'detalle_servicio.cita_id', '=', 'cita.id')
            ->join('servicio', 'cita.servicio_id', '=', 'servicio.id')
            ->select('cita.fecha', 'cita.hora', 'servicio.nombre_servicio', 'servicio.costo')
            ->where('users.id', '=', $id)->get();

        return view('citas',[
            'citas' => $citas
        ]);
    }
    
    public function municipios($estado_id){

        $municipios = BD::table('municipio')->where('estado_id', '=', $estado_id)->get();
        return view('forms.municipios',[
            'municipios' => $municipios
        ]);
    }

    public function actualizarperfil (Request $request){

        $id = $request->input('id');
        $user = DB::table('users')->where('id', '=', $id)
            ->update(array(
                'nombre' => $request->input('nombre'),
                'apellido_paterno' => $request->input('apellido_paterno'),
                'apellido_materno' => $request->input('apellido_materno'),
                'edad' => $request->input('edad'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ));

        return redirect()->action('ControladorRutas@perfil');
    }

    public function insertar_cita (Request $request){

        $cita = DB::table('cita')->insert(array(
            'fecha' => $request->input('fecha'),
            'hora' => $request->input('hora'),
            'servicio_id' => $request->input('direccion_id')
        ));

        $detalle_servicio = DB::table('detalle_servicio')->insert(array(
            'num_factura' => $request->input('num_factura'),
            'subtotal' => '0',
            'tipo_servicio' => $request->input('tipo_servicio'),
            'cliente_id' => $request->input('user_id'),
            'cita_id' => $request->input('num_factura'),
            'direccion_id' => $request->input('direccion_id')
        ));

        return redirect()->action('BDController@citas', ['id' => Auth::id()]);
    }
}

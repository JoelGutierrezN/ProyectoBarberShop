<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorRutas extends Controller
{
    public function index () { return view( 'bienvenida' ); }
    public function citas () { return view( 'citas' ); }
    public function contacto () { return view( 'contacto' ); }

}

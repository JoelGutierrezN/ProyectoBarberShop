<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDController extends Controller
{
    public function citas(){
        $citas = DB::table('cita')->where('id', '=', '1')->get();

        return view('citas',[
            'citas' => $citas
        ]);
    }
}

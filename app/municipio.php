<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table = 'municipio';

    public function DatosMunicipio(){
        return $this->belongsTo('App/estado', 'id');
    }
}

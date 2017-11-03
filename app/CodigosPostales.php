<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodigosPostales extends Model
{
    protected $fillable = [
        'id_codigo_postal',
        'id_estado',
        'estado',
        'id_municipio',
        'municipio',
        'ciudad',
        'zona',
        'codigo_postal',
        'asentamiento',
        'tipo'
        ];
}

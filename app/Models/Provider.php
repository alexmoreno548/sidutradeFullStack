<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';

    protected $fillable = 
    [
    	'nombre_representante',
    	'empresa',
    	'email',
    	'ubicacion_fiscal',
    	'producto',
    	'cantidad',
        'puerto_destino',
    	'comentarios',
        'archivo',
    ];
}

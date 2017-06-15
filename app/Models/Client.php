<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = 
    [
    	'nombre_representante',
    	'empresa',
    	'email',
    	'ubicacion_fiscal',
    	'producto',
    	'cantidad',
    	'entrega',
    	'puerto_destino',
    	'consumo_mes',
    	'frecuencia_reposicion_inventario',
    	'comentarios',
        'archivo',

    ];
}

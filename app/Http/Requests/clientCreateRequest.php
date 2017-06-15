<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientCreateRequest extends FormRequest
{

    protected $errorBag = 'client';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return 
        [
            'nombre_representante_cliente' => 'required',
            'empresa_cliente' => 'required',
            'email_cliente' => 'required| email',
            'ubicacion_fiscal_cliente' => 'required',
            'producto_cliente' => 'required',
            'cantidad_cliente' => 'required',
            'entrega_cliente' => 'required',
            'puerto_destino_cliente' => 'required',
            'consumo_mes_cliente' => 'required',
            'frecuencia_reposicion_inventario_cliente' => 'required',
            'comentarios_cliente' => 'required',
            'archivo_cliente' => 'required|mimes:pdf, doc, docx',
            
        ];

    }
}

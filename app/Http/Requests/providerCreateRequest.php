<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class providerCreateRequest extends FormRequest
{
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
            'nombre_representante' => 'required',
            'empresa' => 'required',
            'email' => 'required| email',
            'ubicacion_fiscal' => 'required',
            'producto' => 'required',
            'cantidad' => 'required',
            'entrega' => 'required',
            'puerto_destino' => 'required',
            'comentarios' => 'required',
            'archivo' => 'required|mimes:pdf, doc, docx',
        ];
    }
}

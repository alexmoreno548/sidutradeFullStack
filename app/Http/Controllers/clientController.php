<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\clientCreateRequest;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.voyager.clients.browse', ['Client' => Client::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(clientCreateRequest $request)
    {

        if ($validator->fails())
        {
            return Redirect::to('welcome')->withErrors($validator, '1');
        }
        //creamos la ruta
        $fileRoute = "files/clients/";

        //damos el correcto nombre al archivo
        $fileName = $request->file('archivo_cliente')->getClientOriginalName();

        //creamos el path con la ruta y el nombre
        $filePath = $fileRoute.$fileName;

        //guardamos en la carpeta definida en la ruta con el nombre del archivo
        $request->file('archivo_cliente')->move($fileRoute, $fileName);
        
        //guardamos los valores en la base de datos
        Client::create
        ([
            'nombre_representante' => $request['nombre_representante_cliente'],
            'empresa' => $request['empresa_cliente'],
            'email' => $request['email_cliente'],
            'ubicacion_fiscal' => $request['ubicacion_fiscal_cliente'],
            'producto' => $request['producto_cliente'],
            'cantidad' => $request['cantidad_cliente'],
            'entrega' => $request['entrega_cliente'],
            'puerto_destino' => $request['puerto_destino_cliente'],
            'consumo_mes' => $request['consumo_mes_cliente'],
            'frecuencia_reposicion_inventario' => $request['frecuencia_reposicion_inventario_cliente'],
            'comentarios' => $request['comentarios_cliente'],
            'archivo' => $filePath,
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function file($file)
    {
      return redirect()->route('fileClient', [$file]);
    }
}

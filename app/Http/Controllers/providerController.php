<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Provider;
use App\Http\Requests\providerCreateRequest;

class providerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('vendor.voyager.providers.browse', ['Provider' => Provider::all()]);
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
    public function store(providerCreateRequest $request)
    {
        //creamos la ruta
        $fileRoute = "files/providers/";

        //damos el correcto nombre al archivo
        $fileName = $request->file('archivo')->getClientOriginalName();

        //creamos el path con la ruta y el nombre
        $filePath = $fileRoute.$fileName;

        //guardamos en la carpeta definida en la ruta con el nombre del archivo
        $request->file('archivo')->move($fileRoute, $fileName);
        
        //guardamos los valores en la base de datos
        Provider::create
        ([
            'nombre_representante' => $request['nombre_representante'],
            'empresa' => $request['empresa'],
            'email' => $request['email'],
            'ubicacion_fiscal' => $request['ubicacion_fiscal'],
            'producto' => $request['producto'],
            'puerto_destino' => $request['puerto_destino'],
            'cantidad' => $request['cantidad'],
            'comentarios' => $request['comentarios'],
            'archivo' => $filePath,
        ]);

        return ('se envio bien');
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
      return redirect()->route('fileProvider', [$file]);
    }
}

{{ csrf_field() }}
@if(count($errors->client) > 0)

    <div class="alert alert-danger" role="alert">
      
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <ul>
          @foreach($errors->client->all() as $error)
          <li>{!!$error!!}</li>
          @endforeach
      </ul>
    </div>
@endif
    
<legend>Clientes</legend>
    <div class="inputs">
        <div class="form-group name-box col-md-6 col-sm-6">
            {!!Form::label('Nombre Representante ')!!}
            {!!Form::text('nombre_representante_cliente',null , ['id' => 'nombreRepresentanteCliente', 'class' => 'form-control'])!!}
        </div>
        <div class="form-group name-box col-md-6 col-sm-6">
            {!!Form::label('Empresa ')!!}
            {!!Form::text('empresa_cliente', null, ['id' => 'empresaCliente','class' => 'form-control'])!!}
        </div>
        <div class="form-group name-box col-md-6 col-sm-6">
            {!!Form::label('Correo Electronico ')!!}
            {!!Form::text('email_cliente', null, ['id' => 'emailCliente','class' => 'form-control'])!!}
        </div>
        <div class="form-group name-box col-md-6 col-sm-6">
            {!!Form::label('Ubicacion Fiscal')!!}
            {!!Form::text('ubicacion_fiscal_cliente', null, ['id' => 'ubicacionFiscalCliente','class' => 'form-control'])!!}
        </div>  
    </div>
    <div class="combox">
        <label class="form-group col-md-4 col-sm-4 col-xs-12">Producto
            {!!Form::select('producto_cliente', ['producto1' => '1', 'producto2' => 'producto2'], 'Producto', ['id' => 'productoCliente','class' => 'form-control'])!!}
        </label>
        <label class="form-group col-md-4 col-sm-4 col-xs-12">Cantidad
            {!!Form::select('cantidad', ['cantidad1' => '1', 'cantidad2' => '2'], 'cantidad', ['id' => 'cantidadCliente','class' => 'form-control'])!!}
        </label>
        <label class="form-group col-md-4 col-sm-4 col-xs-12">Entrega
            {!!Form::select('entrega_cliente', ['entrega1' => '1', 'entrega2' => '2'], 'entrega', ['id' => 'entregaCliente','class' => 'form-control'])!!}
        </label>
        <label class="form-group col-md-4 col-sm-4 col-xs-12">Puerto de destino
            {!!Form::select('puerto_destino_cliente', ['puerto de destino1' => '1', 'puerto de destino2' => '2'], 'puerto de destino', ['id' => 'puertoDestinoCliente','class' => 'form-control'])!!}
        </label>
        <label class="form-group col-md-4 col-sm-4 col-xs-12">Consumo mes
            {!!Form::select('consumo_mes_cliente', ['consumo mes1' => '1', 'consumo mes2' => '2'], 'consumo mes', ['id' => 'consumoMesCliente','class' => 'form-control'])!!}
        </label>
        <label class="form-group col-md-4 col-sm-4 col-xs-12">Frecuencia resposicion inventario
            {!!Form::select('frecuencia_reposicion_inventario_cliente', ['frecuencia1' => '1', 'frecuencia2' => '2'], 'frecuencia', ['id' => 'frecuenciaReposicionInventarioCliente','class' => 'form-control'])!!}
        </label>
    </div>
        <label for="" class="form-group col-md-12 col-sm-12 col-xs-12"> Comentarios
            {!!Form::textarea('comentarios_cliente', null, ['id' => 'comentariosCliente','class' => 'form-control', 'cols' => '30', 'rows' => '1'])!!}
        </label>
        <div class="form-group btns col-md-12">
        <label for="fileUser">
            <label class="btn btn-warning">Adjuntar Archivo
            {!!Form::file('archivo_cliente', ['class' => 'file'])!!}
            </label>
        </label>
     {!!Form::submit('Enviar', ['class' => 'btn btn-primary', 'name' =>'submit1'])!!}
    </div>


    {{ csrf_field() }}
    <fieldset>
@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <ul>
          @foreach($errors->all() as $error)
          <li>{!!$error!!}</li>
          @endforeach
      </ul>
    </div>
@endif
        <legend>Proveedores</legend>
        <div class="inputs">
            <div class="form-group name-box col-md-6 col-sm-6">
                {!!Form::label('Nombre Representante ')!!}
                {!!Form::text('nombre_representante',null , ['class' => 'form-control'])!!}
            </div>
            <div class="form-group name-box col-md-6 col-sm-6">
                {!!Form::label('Empresa ')!!}
                {!!Form::text('empresa', null, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group name-box col-md-6 col-sm-6">
                {!!Form::label('Correo Electronico ')!!}
                {!!Form::text('email', null, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group name-box col-md-6 col-sm-6">
                {!!Form::label('Ubicacion Fiscal')!!}
                {!!Form::text('ubicacion_fiscal', null, ['class' => 'form-control'])!!}
            </div>  
        </div>
        <div class="combox">
            <label class="form-group col-md-3 col-sm-6 col-xs-12">Producto
                {!!Form::select('producto', ['producto1' => '1', 'producto2' => 'producto2'], 'Producto', ['class' => 'form-control'])!!}
            </label>
            <label class="form-group col-md-3 col-sm-6 col-xs-12">Cantidad (Ton.)
                {!!Form::select('cantidad', ['cantidad1' => '1', 'cantidad2' => '2'], 'cantidad', ['class' => 'form-control'])!!}
            </label>
            <label class="form-group col-md-3 col-sm-6 col-xs-12">Entrega
                {!!Form::select('entrega', ['entrega1' => '1', 'entrega2' => '2'], 'entrega', ['class' => 'form-control'])!!}
            </label>
            <label class="form-group col-md-3 col-sm-6 col-xs-12">Puerto de destino
                {!!Form::select('puerto_destino', ['puerto de destino1' => '1', 'puerto de destino2' => '2'], 'puerto de destino', ['class' => 'form-control'])!!}
            </label>
        </div>
            <label for="" class="form-group col-md-12 col-sm-12 col-xs-12"> Comentario
                {!!Form::textarea('comentarios', null, ['class' => 'form-control', 'cols' => '30', 'rows' => '1'])!!}
            </label>
        <div class="form-group btns col-md-12">
            <label for="fileUser">
                <label class="btn btn-warning">Adjuntar Archivo
                {!!Form::file('archivo')!!}
                </label>
            </label>
            {!!Form::submit('Enviar', ['class' => 'btn btn-primary', 'name' => 'submit2'])!!}
        </div>
    </fieldset>
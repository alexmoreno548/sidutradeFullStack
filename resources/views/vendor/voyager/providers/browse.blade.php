@extends('voyager::master')

@section('content')
	<div class="container">
	<br>
	<h3>Proveedores</h3>
	<br>
		<table class="table table-bordered tableCustom">
	  		<tr>
	  			<td><strong>Nro</strong></td>
	  			<td><strong>Nombre representante</strong></td>
	  			<td><strong>Empresa</strong></td>
	  			<td><strong>Correo electronico</strong></td>
	  			<td><strong>Ubicacion fiscal</strong></td>
	  			<td><strong>Producto</strong></td>
	  			<td><strong>Cantidad</strong></td>
	  			<td><strong>Puerto de destino</strong></td>
	  			<td><strong>Comentarios</strong></td>
	  			<td><strong>Archivo</strong></td>
	  		</tr>
	  		@php
	  			$counterProv = 1;
	  		@endphp
	  		@foreach($Provider as $provider)
	  		<tr>
	  			<td>@php echo ($counterProv++); @endphp</td>
	  			<td>{{$provider->nombre_representante}}</td>
	  			<td>{{$provider->empresa}}</td>
	  			<td>{{$provider->email}}</td>
	  			<td>{{$provider->ubicacion_fiscal}}</td>
	  			<td>{{$provider->producto}}</td>
	  			<td>{{$provider->cantidad}}</td>
	  			<td>{{$provider->puerto_destino}}</td>
	  			<td>{{$provider->comentarios}}</td>
	  			<td><a href="/{{$provider->archivo}}" target="_blank">PDF</a></td>
	  		</tr>
	  		@endforeach
		</table>
	</div>

@endsection
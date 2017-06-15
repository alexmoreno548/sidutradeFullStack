@extends('voyager::master')

@section('content')
	<div class="container">
	<br>
	<h3>Clientes</h3>
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
	  			<td><strong>Entrega</strong></td>
	  			<td><strong>Puerto destino</strong></td>
	  			<td><strong>Comsumo mes</strong></td>
	  			<td><strong>Frecuencia reposicion inventario</strong></td>
	  			<td><strong>Comentarios</strong></td>
	  			<td><strong>Archivo</strong></td>
	  		</tr>
	  		@php
	  			$counterCli = 1;
	  		@endphp
	  		@foreach($Client as $client)
	  		<tr>
	  			<td>@php echo ($counterCli++); @endphp</td>
	  			<td>{{$client->nombre_representante}}</td>
	  			<td>{{$client->empresa}}</td>
	  			<td>{{$client->email}}</td>
	  			<td>{{$client->ubicacion_fiscal}}</td>
	  			<td>{{$client->producto}}</td>
	  			<td>{{$client->cantidad}}</td>
	  			<td>{{$client->entrega}}</td>
	  			<td>{{$client->puerto_destino}}</td>
	  			<td>{{$client->consumo_mes}}</td>
	  			<td>{{$client->frecuencia_reposicion_inventario}}</td>
	  			<td>{{$client->comentarios}}</td>
	  			<td><a href="/{{$client->archivo}}" target="_blank">PDF</a></td>
	  		</tr>
	  		@endforeach
		</table>
	</div>

@endsection
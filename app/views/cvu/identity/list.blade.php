@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Documentos de Identidad -{{Auth::user()->nombre}}</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('Identidad')}}">Identidad</a></li>
			<li class="active">Agregar</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class=""><a href="{{url('Identidad')}}" >Informacion Personal</a></li>
			<li class="active"><a href="{{url('Identidad/list')}}" data-toggle="tab" > Documentos de Identidad</a></li>
		</ul>                
		<div class="tab-content">
			<div class="tab-pane fade active in" >
				<div class="panel panel-sea margin-bottom-40">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-edit"></i> Documentos de Identidad
							<a data-toggle="modal" href='{{url("Identidad/add")}}'> <i class="glyphicon glyphicon-plus pull-right">Agregar</i></a></h3>
						</div>
						<br><br>
						<table class="table table-striped DataTable">
							<thead>
								<tr>
									<th>N.o</th>
									<th>Descripción</th>
									<th>Documento Principal</th>
									<th>Clave</th>
									<th>Registrado</th>
									<th>Administrar</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1;?>
								@foreach($docs as $k)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$k->descripcion}}</td>
									<td>{{$k->doc_principal=='0'?'NO':'SI'}}</td>
									<td>{{$k->clave_doc}}</td>
									<td>{{$k->created_at}}</td>
									<td>
										<a href='{{url("Identidad/delete/$k->id")}}'class="btn btn-danger btn-xs" onclick="return confirm('¿Está seguro que decea elimiar este documento de Identidad ?');" ><i class="fa fa-trash-o"></i> Eliminar</a>
										<a  href='{{url("Identidad/edit/$k->id")}}'class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</a>
									</td>
								</tr>

								@endforeach


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	
	@stop
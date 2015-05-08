@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">CVU</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('sistema/cvu')}}">CVU</a></li>
			<li><a href="{{url('ReportTech')}}">Reportes Técnicos</a></li>
			<li class="active">Mis Reportes</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="panel panel-red margin-bottom-40">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-tasks"></i> Reportes Técnicos</h3>
		</div>
		<div class="panel-body">
			<h4><a href="{{url('ReportTech/add')}}"><i class="fa fa-plus "></i>Agregar Reporte</a></h4>
		</div>
		<table class="table  table-striped  DataTable ">
			<thead>
				<tr>
					<th>No.</th>
					<th> Titulo</th>
					<th>Objetivo</th>
					<th class="hidden-sm"> Instancia</th>
					<th>Autores</th>
					<th>Keywords</th>
					<th>Fecha</th>
					<th>Administrar                     </th>
				</tr>
			</thead>
			<tbody>
				@foreach($rp as $k)
				<tr>
					<td>{{$k->id}}</td>
					<td>{{$k->titulo}}</td>
					<td>{{$k->objetivo}}</td>
					<td >{{$k->instancia}}</td>
					<td>{{$k->autores}}</td>
					<td>{{$k->keywords}}</td>
					<td>{{$k->fecha}}</td>
					<td class="text-right">
						<a class="btn btn-danger btn-xs"onclick="return confirm('¿Está seguro que decea elimiar el reporte ?');"  href='{{url("ReportTech/delete/$k->id")}}'><i class="fa fa-trash-o"></i> Eliminar</a> 
						<a class="btn btn-warning btn-xs"  href='{{url("ReportTech/edit/$k->id")}}' ><i class="fa fa-pencil"></i> Editar</a> 
						<a class="btn btn-info btn-xs"  href='{{url("ReportTech/show/$k->id")}}'><i class="fa fa-share"></i> Ver</a> 
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop
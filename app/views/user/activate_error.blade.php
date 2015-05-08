@extends('layouts.master')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Activacion de Usuario</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="user">Usuarios</a></li>
			<li class="active">Error</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

		<h2>Al parecer Ocurrio un Error en la activacion de la cuenta el token no coincide o la cuenta ya esta activada, si aun asi no puedes accesar contacta al jefe de soporte <a href="mailto:toa.l@hotmail.com">Ing.Manuel de jesus Toala Perez</a></h2>
	</div>
</div>
@stop
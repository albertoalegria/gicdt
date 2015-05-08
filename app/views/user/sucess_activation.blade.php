@extends('layouts.master')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Activacion de Usuarios</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="user">Usuarios</a></li>
			<li class="active">Activacion</li>
		</ul>
	</div>
</div>
<div class="container content ">
	<h1>¡Felicidades Bienvenido al Sistema Integral del Grupo de Investigacion Cientifica y Tecnologica del Estado de Chiapas!</h1>
	<h2>En momento se te rediccionara al sistema de Autentificacion si se demora da click {{HTML::link('user','Acceso')}}</h2>
</div>
	<script>
	function r() { location.href="/user" } 
	setTimeout ("r()", 5000);
</script>
@stop

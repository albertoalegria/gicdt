@extends('layouts.master')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Registro de Usuarios</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url()}}">Home</a></li>
			<li><a href="{{url('user')}}">Usuarios</a></li>
			<li><a href="{{url('user/registro')}}">Registro</a></li>
			<li class="active">Confirmar Correo</li>
		</ul>
	</div>
</div>
<div class="container content">
	<blockquote class="hero">
		<p>
			<em>Estimado(a) {{$nombre.' '.$apellidos }} Gracias por registrarse al sitio web del GICDT</em>
			<em>				<h3>Ahora solo necesita activar su cuenta para tener acceso a la plataforma.</h3>
				<h3>Se ha enviado un correo electronico para poder habilitar su cuenta</h3>
			</em>
		</p>
		
		<small>
			<em>
				Grupo de Investigación Cientifica y Desarrollo Tecnológico del Estado de Chiapas
			</em>
		</small>
	</blockquote>
	
</div>
@stop
@extends('layouts.master')

@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Acceso al Sitema</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url()}}">Home</a></li>
			<li><a href="{{url('user')}}">Usuarios</a></li>
			<li class="active">Restablecer Contraseña</li>
		</ul>
	</div>
</div>
<div class="container content">	
		{{Form::open(array('url'=>'user/resetpassword'))}}
		<input type="email" name="email">
		<input type="submit" value="Send Reminder">
		{{Form::close()}}
	</form>
</div>

@stop
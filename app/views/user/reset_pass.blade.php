@extends('layouts.master')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Acceso al Sitema</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url()}}">Home</a></li>
			<li><a href="{{url('user')}}">Usuarios</a></li>
			<li class="active">Login</li>
		</ul>
	</div>
</div>
<div class="container content">	
	{{Form::open(array('url'=>'user/resetpassfinal'))}}
	
	@if($errors->has())
	@foreach ($errors->all() as $error)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $error }}        
	</div>
	@endforeach
	@endif
	<input type="hidden" name="token" value="{{ $token }}">
	<div class="row">
		<div class="col-lg-4 col-md-3 col-xs-3">
			
			<div class="form-group">
				<label for="">Correo Electronico</label>
				<input type="email" class="form-control" name="email">
			</div>
		</div>
		<div class="col-lg-4 col-md-3 col-xs-3">

			<div class="form-group">
				<label for="">Contraseña</label>
				<input type="password"  class="form-control"  name="password">
			</div>
		</div>
		<div class="col-lg-4 col-md-3 col-xs-3">

			<div class="form-group">
				<label for="">Repetir Contraseña</label>

				<input type="password" class="form-control"   name="password_confirmation">
			</div>
		</div>
		<div class="col-lg-4 col-md-3 col-xs-3">

			<input type="submit" class="btn"  value="Reset Password">
		</div>
		{{Form::close()}}
	</div>
</div>

@stop
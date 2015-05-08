@extends('layouts.master')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Acceso al Sitema</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
			<li><a href="{{url('user')}}">Usuarios</a></li>
			<li class="active">Login</li>
		</ul>
	</div>
</div>
<div class="container content">	
	@if($errors->has())
	@foreach ($errors->all() as $error)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $error }}        
	</div>
	@endforeach
	@endif
	@if(isset($info))
	<div class="alert alert-info">
	 		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	 		<strong>{{$info}}</strong>
	</div>
	@endif 	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			{{ Form::open(array('url' => 'user','class'=>'reg-page')) }} 

			<div class="reg-header">            
				<h2>Acceso al Sistema</h2>
			</div>
			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{{Form::email('correo','',array('required'=>'','placeholder'=>"Correo Electronico",'class'=>"form-control"))}}
			</div>                    
			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				{{Form::password('password',array('required'=>'','placeholder'=>"Contraseña",'class'=>"form-control"))}}

			</div>                    
			<div class="row">
				<div class="col-md-6">

					<label class="checkbox" ><input type="checkbox" name='recordar'>Recordarme</label>                        
				</div>
				<div class="col-md-6">
					<button class="btn-u pull-right" type="submit">Entrar</button>                        
				</div>
			</div>

			<hr>

			<h4>¿Ha olvidado su contraseña ?</h4>
			<p>no se preocupe , <a class="color-green" href="#">haga clic aquí </a> para restablecer su contraseña</p>
			{{@Form::close()}}
		</div>
	</div><!--/row-->
	<hr>
	<h2 >AÚN NO ERES MIEMBRO?</h2>
	<div class="form-body">
		<h4>Que esperas registrate y llena de inmediato tu curriculo, el cual te ofrecera grandes beneficios.</h4>
		<a href="user/registro" class="btn-u">Nuevo Registro</a>
		<h5>LOS USUARIOS REGISTRADOS PUEDEN:</h5>
	</div>
</div>
@stop
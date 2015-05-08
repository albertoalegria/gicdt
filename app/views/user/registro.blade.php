@extends('layouts.master')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Registro de Usuarios</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url()}}">Home</a></li>
			<li><a href="{{url('user')}}">Usuarios</a></li>
			<li class="active">Registro</li>
		</ul>
	</div>
</div>
<div class="container content">
	{{ Form::open(array('url'=>'user/registro','class'=>''))}}
	@if($errors->has())
	@foreach ($errors->all() as $error)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $error }}        
	</div>
	@endforeach
	@endif 
	<div class="panel panel-blue margin-bottom-40">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-tasks"></i> Registro de Usuario</h3>
		</div>
		<div class="panel-body">                                                      
			<div class="row">
				<div class='col-lg-4'>

					{{Form::label('nombre', 'Nombre')}}
					{{Form::text('nombre','',array('required'=>'','placeholder'=>"Ejemplo:Manuel",'class'=>"form-control  "))}}

				</div>
				<div class='col-lg-4'>

					{{Form::label('appat', 'Apellido Paterno')}}

					{{Form::text('appat','',array('required'=>'','placeholder'=>"Apellido Paterno",'class'=>"   form-control"))}}
				</div>
				<div class='col-lg-4'>

					{{Form::label('apmat', 'Apellido Materno')}}

					{{Form::text('apmat','',array('placeholder'=>"Apellido Materno",'class'=>"form-control  "))}}

				</div>

				<div class='col-lg-4'>
					{{Form::label('email', 'Correo Electrónico')}}

					{{Form::email('email','',array('required'=>'','placeholder'=>"Correo Electronico",'class'=>"form-control  "))}}
				</div>
				<div class="col-lg-4">
					{{Form::label('password','Contraseña')}}
					{{Form::password('password',array('required'=>'','placeholder'=>'Contraseña','class'=>'form-control'))}}
				</div>
				<div class="col-lg-4">
					{{Form::label('rpassword','Confirmar Contraseña')}}
					{{Form::password('rpassword',array('required'=>'','placeholder'=>'Repetir Contraseña','class'=>'form-control'))}}
				</div>
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<label class='checkbox'>
						<input type="checkbox" name='asepto'>
						<a href="">Aceptar terminos y condicionesterms and conditions of this website.</a>
					</label>
				</div>
				<div class="col-md-6 col-lg-4">
					<br>	
					<button class="btn-u pull-right" type="submit">Registrar</button>                        
				</div>
			</div>
		</div>
	</div>

	{{Form::close();}}
</div>
@stop
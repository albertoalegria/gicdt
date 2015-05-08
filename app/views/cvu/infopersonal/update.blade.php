@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">CVU</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('sistema/cvu')}}">CVU</a></li>
			<li><a href="{{url('cvu/Me')}}">Información Personal</a></li>
			<li class="active">Mis Datos</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="profile-body margin-bottom-20">
		<div class="tab-v1">
			<ul class="nav nav-justified nav-tabs">
				<li class="active"><a data-toggle="tab" href="#perfil">Editar Perfil</a></li>
				<li><a data-toggle="tab" href="#face">Vincular</a></li>
			</ul>          
			<div class="tab-content">
				<div id="face" class="profile-edit tab-pane fade ">
					<h2 class="heading-md">Vincular cuenta Con :</h2>
					<a href='{{Facebook::getLoginUrl(['public_profile'],url().'/facebook/update');}}'>Facebook</a>
				</div>

				<div id="perfil" class="profile-edit tab-pane fade in active">
					<h2 class="heading-md">Información Personal</h2>
					{{Form::open(array('url'=>'cvu/Me','class'=>'sky-form','enctype'=>'multipart/form-data'))}}
					@if($errors->has())
					@foreach ($errors->all() as $error)
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						{{ $error }}        
					</div>
					@endforeach
					@endif 
					<dl class="dl-horizontal">
						<dt>Nombre </dt>
						<dd>
							<section>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text"  name='nombre'  value='{{$user->nombre}}' placeholder="Username" >
									<b class="tooltip tooltip-bottom-right">Nombre </b>
								</label>
							</section>
						</dd>
						<dt>Apellido Paterno </dt>
						<dd>
							<section>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text"  name='appat'   value='{{$user->ap_pat}}'placeholder="Apellido Paterno" >
									<b class="tooltip tooltip-bottom-right">Información Requerida</b>
								</label>
							</section>
						</dd>
						<dt>Apellido Materno </dt>
						<dd>
							<section>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text"  name='apmat'  value='{{$user->ap_mat}}' placeholder="Apellido Materno" >
									<b class="tooltip tooltip-bottom-right">Información Requerida</b>
								</label>
							</section>
						</dd>

						<dt>Telefono</dt>
						<dd>
							<section>
								<label class="input">
									<i class="icon-append fa fa-fax"></i>
									<input type="number"    value='{{$user->telefono}}' name='cel' placeholder="Telefono" >
									<b class="tooltip tooltip-bottom-right">Telefono de contacto</b>
								</label>
							</section>
						</dd>
						<dt>Estado Civil</dt>
						<dd>
							<section>
								<select name="estado_civl" class="form-control">
									<option value="Soltero">Soltero</option>
									<option value="Casado">Casado</option>
									<option value="Divorciado">Divorciado</option>
									<option value="Viudo">Viudo</option>


								</select>
							</section>
						</dd>
						<dt>Código Postal</dt>
						<dd>
							<section>
								<label class="input">
									<i class="icon-append fa fa-building"></i>
									<input type="number"  name='cp' value='{{$user->cp}}' placeholder="Codigo Postal" >
									<b class="tooltip tooltip-bottom-right">Código Postal</b>
								</label>
							</section>
						</dd>
						
						<dt>Imagen de Usuario</dt>
						<dd>
							<section>
								<label for="img" class="input input-file">
									<div class="button">
										<input type="file" id="img" name="image" onchange="this.parentNode.nextSibling.value = this.value" accept="image/jpg,image/png,image/JPEG" required="">Examinar</div><input type="text" readonly="">
									</label>
								</section>
							</dd>   
						</dl>

						<button class="btn-u" type="submit">Save Changes</button>
						{{Form::close()}}
					</div>




				</div>    
			</div>
		</div>
		<link rel="stylesheet" href="{{url('css/pages/profile.css')}}">
		<link rel="stylesheet" href="{{url()}}/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
		@stop
@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Identidad</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('Identidad')}}">Identidad</a></li>
			<li class="active">Agregar Documentos</li>
		</ul>
	</div>
</div>
<div class="container content">

	{{Form::open(array('url'=>'Identidad/add','class'=>'sky-form'))}}
	<div class="row">
		@if($errors->has())
		@foreach ($errors->all() as $error)
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			{{ $error }}        
		</div>
		@endforeach
		@endif 
		<div class="col-lg-4">
			<label for="pais">Pais</label>
			<select name="pais" id=""  class='form-control' required=''>
				<option selected="" disabled=""   value="" required="">Selecciona un Pais</option>
				@foreach ($pais as $k) 
				<option value="{{$k->id}}">{{$k->nombre}}</option>
				@endforeach

			</select>

		</div>
		<div class="col-lg-4">
			<label for="desc">Descripción</label>
			<input type="text" class="form-control" value="{{Input::old('desc')}}" name='desc'>
		</div>
		<div class="col-lg-4">
			<label for="clave">Clave del documento</label>
			<input type="text" name="clave" value="{{Input::old('clave')}}" class="form-control">
		</div>
		<div class="col-lg-4">
			<br><br>
			<label class="checkbox"><input type="checkbox" name="docprin" ><i></i>Documento Principal</label>
		</div>
		<div class="col-lg-4">
			<br>
			<button class="btn-u btn-u-blue" type="submit"><i class="glyphicon glyphicon-floppy-save"></i> Guardar</button>

		</div>
	</div>
	{{Form::close()}}
</div>
@stop
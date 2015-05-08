@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Identidad</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('Identidad')}}">Identidad</a></li>
			<li class="active">Ver</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="{{url('Identidad')}}" data-toggle="tab">Informacion Personal</a></li>
			<li class=""><a href="{{url('Identidad/list')}}" >Documentos de Identidad</a></li>
		</ul>                
		<div class="tab-content">
			<div class="tab-pane fade active in" >
				<h2>Actualizar Información Personal</h2>
				<div class="row">
					{{Form::open(array('url'=>'Identidad/update'))}}
					@if($errors->has())
					@foreach ($errors->all() as $error)
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						{{ $error }}        
					</div>
					@endforeach
					@endif 
					<div class="col-lg-3 col-md-3 col-xs-4">
						<label for="fecha">Fecha de Nacimiento</label>
						<div class="input-group date "  >
							<input type="text" name="fecha"  value='{{$identidad->fec_nac}}' 	 id='fecha'   value=""  class="form-control">
							<span class='input-group-addon'><span class='glyphicon-calendar glyphicon'></span></span>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-xs-4">
						<label for="nacion">Nacionalidad</label>
						<input type="text" name='nacion' value='{{$identidad->nacionalidad}}'   class='form-control' required=''>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-4">
						<label for="sexo">Sexualidad</label>
						<select name="sexo" class='form-control ' 	 id="sexo">
							<option selected="" disabled=""   value="" required="">Selecciona una Opción</option>
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-4">
						<label for="pais">Pais de Origen</label>
						<select name="pais" id=""  class='form-control' required=''>
							<option selected="" disabled=""   value="" required="">Selecciona un Pais</option>
							@foreach ($pais as $k) 
							<option value="{{$k->id}}">{{$k->nombre}}</option>
							@endforeach

						</select>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-4">
						<label for="state">Estado de Nacimiento</label>
						<input type="text"  name='state'  value='{{$identidad->estado_nacimiento}}'  class='form-control' required='' list="list">
						<datalist id="list">
							@foreach ($estado as $k) 
							<option value="{{$k->nombre}}">{{$k->abrev}}</option>
							@endforeach
						</datalist>
					</div>
					<div class="col-lg-4">
						<br>
						<button class="btn-u btn-u-blue" type="submit"><i class="glyphicon glyphicon-floppy-save"></i> Guardar</button>
					</div>
					{{Form::close()}}
				</div>
			</div>
			

		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$("#fecha").datepicker({ dateFormat: 'yy-mm-dd',
			prevText: '<i class="fa fa-angle-left"></i>',
			nextText: '<i class="fa fa-angle-right"></i>'});
	});
</script>
@stop
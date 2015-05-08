@extends('layouts.sistema')
@section('container')

{{HTML::style('css/bootstrap-tagsinput.css')}}
{{HTML::style('css/redactor.css')}}


{{HTML::script('js/redactor.js')}}
{{HTML::script('js/bootstrap-tagsinput.js')}}
{{HTML::script('js/dropzone.min.js')}}
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">CVU</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('ReportTech')}}">Reportes Técnicos</a></li>
			<li class="active">Agregar</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="panel panel-blue margin-bottom-40">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-tasks"></i> Agregar Reporte Tecnico</h3>
		</div>
		<div class="panel-body">                                
			{{Form::open(array('url'=>'ReportTech/add','enctype'=>'multipart/form-data','class'=>'margin-bottom-40','class'=>'sky-form'))}}                      


			@if($errors->has())
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ $error }}        
			</div>
			@endforeach
			@endif 
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-4">
					<div class="form-group">
						<label for="titulo">Titulo</label>
						<input type="text" value="{{Input::old('title')}}" name='title' class="form-control" id="titulo" placeholder="Titulo del Reporte">
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<div class="form-group">
						<label for="Instancia">Instancia</label>
						<input type="text"  name='instancia'  value="{{Input::old('instancia')}}"  class="form-control" id="Instancia" placeholder="Ejemplo: instituto tecnologico  de Tgz">
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-xs-4">
					<div class="form-group">
						<label for="objetivo">Objetivo</label>
						<textarea type=""  name='objetivo' value="{{Input::old('objetivo')}}"  class="form-control" id="objetivo" placeholder=""></textarea>
					</div>
				</div>
				<div class="col-lg-12">
					<label for="desc">Descipción</label>
					<textarea id="desc" name='desc'    class="form-control"  placeholder="">{{Input::old('desc')}}</textarea>

				</div>
				<div class="col-lg-4">
					<label for="">Fecha de Elaboración</label>
					<div class="input-group date "  >
						<input type="text" name="fecha"  value="{{Input::old('fecha')}}"  value="" id="fecha" class="form-control">
						<span class='input-group-addon'><span class='glyphicon-calendar glyphicon'></span></span>
					</div>
				</div>
				<div class="col-lg-4">
					{{Form::label('autores','Autores')}}
					{{Form::text('autores',Input::old('autores'),array('class'=>'form-control','placeholder'=>'Introduce  los autores separados por comas ','data-role'=>'tagsinput'))}}

				</div>
				<div class="col-lg-4">
					{{Form::label('keywords','Palabras Claves')}}
					{{Form::text('keywords',Input::old('keywords'),array('class'=>'form-control','placeholder'=>'Introduce  palabras claves separadas por comas ','data-role'=>'tagsinput'))}}

				</div>
				<div class="col-lg-4">
					<label for="pag">Numero de Paginas</label>
					<input type="number" name='page' value="{{Input::old('page')}}"  class="form-control" placeholder='Numero de Paginas'>
				</div>
				<div class="col-lg-4">
					<section >
						<label class="label">Imagen de Portada</label>
						<label for="img" class="input input-file">
							<div class="button">
							<input type="file"  id='img' name='image' onchange="this.parentNode.nextSibling.value = this.value" accept="image/jpg,image/png,image/JPEG"required>Examinar</div><input type="text" readonly="">
						</label>
					</section>
				</div>
				<div class="col-lg-4">
					<section >
						<label class="label">Archivo del Reporte</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" name='file_'onchange="this.parentNode.nextSibling.value = this.value" required>Examinar</div><input type="text" readonly="">
						</label>
					</section>
				</div>

			</div>
			<br>
			<button type="submit" class="btn-u btn-u-blue">Submit</button>
			{{Form::close()}}
		</div>
	</div>
</div>

<script>
	
	$(document).ready(function() {
		$("#desc").redactor();
		$("#fecha").datepicker({ dateFormat: 'yy-mm-dd',
			prevText: '<i class="fa fa-angle-left"></i>',
			nextText: '<i class="fa fa-angle-right"></i>'});

	});
</script>

@stop
@extends('layouts.master')
@section('container')
{{HTML::style('css/pages/portfolio-v1.css')}}
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Cursos Disponibles</h1>
		<ul class="pull-right breadcrumb">
			<li>{{HTML::link('sistema','Sistema')}}</li>
			<li>{{HTML::link('curso','Cursos')}}</li>
			<li class="active">Cursos</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="row portfolio-item margin-bottom-50"> 

<div class="alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>Mensaje importante!</h4>
                    <li><h4>USUARIO ACTUALMENTE  REGISTRADO AL CURSO.</h4></li>
                    <p>
                        
                    </p>
                </div>
</div>
</div>
@stop
@extends('layouts.master')

@section('container')
<div class="breadcrumbs">
  <div class="container">
    <h1 class="pull-left">Busqueda de Curso</h1>
    <ul class="pull-right breadcrumb">
      <li>{{HTML::link('sistema','Sistema')}}</li>
      <li>{{HTML::link('curso','Cursos')}}</li>
      <li class="active">Curso</li>
    </ul>
  </div>
</div>
<div class="container content">
	<h1>No se econtro el curso... </h1>
</div>
@stop
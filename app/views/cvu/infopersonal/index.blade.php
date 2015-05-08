@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">CVU</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('sistema/cvu')}}">CVU</a></li>
			<li><a href="{{url('Me')}}">Información Personal</a></li>
		</ul>
	</div>
</div>
@stop
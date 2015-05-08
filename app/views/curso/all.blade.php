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
	<div class="row">
		@foreach ($cursos as $k):
		<div class="col-md-3 col-sm-6">
			<div class="view view-tenth">
			{{ HTML::image("cursos/portadas/$k->logo",'Logo',['class'=>'img-responsive','width'=>"100%"]) }}
			<img class="img-responsive" src="" alt="">
				<div class="mask">
					<h5>{{$k->nombre}}</h5>
					<p>{{$k->desc}}</p>
					{{HTML::link("curso/view/$k->id",'Leer Más',['class'=>'info'])}}
				</div>                
			</div>
		</div>
		@endforeach
	</div>

</div>
@stop
@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Registro al Curso </h1>
		<ul class="pull-right breadcrumb">
			<li>{{HTML::link('sistema','Sistema')}}</li>
			<li>{{HTML::link('curso','Cursos')}}</li>
			<li class="active">Cursos</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="row portfolio-item margin-bottom-50"> 

<h4><h2>Bienvenido al curso      </h2> {{$k->nombre}}  </h4><div>
	
</div> 
				               
<h4>$ {{$k->couta}}</h4>

<em>PROCESO DE INSCRIPCION AL CURSO</em>

<ul>

            <li>Acceder a su cuenta </li>
            <li>Registrarse en la pagina elgrupo.mx</li>
            <li>Incribirse al curso </li>
            <li>realizar el depósito dentro  las fechas establecidas  </li>
            <li>Enviar escaner del baucher  al admin@elgrupo.mx </li>
            <li>Estar pendientes en la pagina  las actualizaciones pertinentes al curso</li>



      </ul>


      <ul>

     </ul>

     <ul>
           <li>Información o aclaraciones enviar correo admin@elgrupo.mx </li>
           
     </ul>
<h3> </h3>


<div>
<a href='{{url("/curso/welcome/$k->id")}}' class="btn-u btn-u-large">Inscribirme al curso</a>	
</div>
@stop
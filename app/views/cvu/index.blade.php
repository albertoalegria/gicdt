@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">CVU</h1>
		<ul class="pull-right breadcrumb">
			<li class="active">Secciones</li>
		</ul>
	</div>
</div>
<div class="container content">		
	<div class="alert alert-block alert-warning fade in">
		<button data-dismiss="alert" class="close" type="button">×</button>
		<h4>Informacion!</h4>
		Estso son algunos modulos del cvu puedes navegar y llenar tu información en los diferentes módulos que se presentan a continuacion.
	</div>        
	<div class="row margin-bottom-30">
		<!-- Colored Funny Boxes -->
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-top-yellow">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/users').'/'.Auth::user()->img}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="{{url('cvu/Me')}}">Información Personal</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
								Datos Personales Lorem ipsum dolor sit amet.
						</p>
					</div>
				</div>                            
			</div>
		</div>
		<!--End Colored Funny Boxes -->

		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-top-sea">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/documets.jpg')}}" class="img-responsive">
<!-- 						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Dell, Google</li>
							<li><i class="fa fa-map-marker"></i> New York, US</li>
						</ul>
					-->					</div>
					<div class="col-md-8">
						<h2><a href="{{url('Identidad')}}">Identidad</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							En esta sección los datos ... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, veritatis!
						</p>
					</div>
				</div>                            
			</div>
		</div>
		<!-- End Bordered Funny Boxes -->

	</div>

	<div class="row margin-bottom-30">
		<!-- Colored Funny Boxes -->            
		
		<!-- Colored Funny Boxes -->
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-top-yellow">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/proyec.jpg')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Proyectos de Investigación</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Este apartado son para los proyectos de investigacion que . Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, modi.
						</p>
					</div>
				</div>                            
			</div>
		</div>
		<!--End Colored Funny Boxes -->

		<!-- Colored Funny Boxes -->            
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-left-orange">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/ad.jpg')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Adscripciones</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star-o"></i></li>
						</ul>
						<p>
							Adscripcíón	
						</p>
					</div>
				</div>                            
			</div>
		</div>
		<!-- End Colored Funny Boxes -->            
	</div>

	<div class="row margin-bottom-30">
		<!-- Bordered Funny Boxes -->
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-left-orange">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/dist.jpg')}}" class="img-responsive">
						<ul class="list-unstyled">
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Grupo de Investigación</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star-o"></i></li>
							<li><i class="fa fa-star-o"></i></li>
							<li><i class="fa fa-star-o"></i></li>
						</ul>
						<p>
							¿Perteneces a un grupo de investigación?... Introduce tus datos
						</p>
					</div>
				</div>                            
			</div>
		</div>
		<!-- End Bordered Funny Boxes -->

		<!-- Bordered Funny Boxes -->
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-left-green">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/report.jpg')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="{{url('ReportTech')}}">Reportes Técnicos</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Reportes de Técnicos, estadias.....Completar
						</p>
					</div>
				</div>                            
			</div>                    
		</div>
		<!-- End Bordered Funny Boxes -->
	</div>

	<div class="row margin-bottom-30">
		<!-- Colored Funny Boxes -->            
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-left-green">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/articulos.jpg')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Articulos Publicados</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Articulos publicados en congresos,journals, ponentes......
						</p>
					</div>
				</div>                            
			</div>                    
		</div>
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-left-green">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/div.jpg')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Divulgaciones</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Revistas,Periodicos,Tv,Radio.................
						</p>
					</div>
				</div>                            
			</div>                    
		</div>
		<!-- End Colored Funny Boxes -->            
	</div>
	<div class="row margin-bottom-30">
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-left-green">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/conacyt.png')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Apoyos Conacyt</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, totam.
						</p>
					</div>
				</div>                            
			</div>                    
		</div>

		<!-- Colored Funny Boxes -->            
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-colored funny-boxes-sea">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/education.png')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Educación</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Grados Academicos......
						</p>
					</div>
				</div>                            
			</div>                    
		</div>
		<!-- End Colored Funny Boxes -->            
	</div>
	<div class="row margin-bottom-30">
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-colored funny-boxes-red">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/dist.jpg')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Distinciones</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Distinciones Concursos inoviacion,veranos... 
						</p>
						<a class="btn-u btn-u-blue" href="#">Leer Mas</a>
					</div>
				</div>                            
			</div>
		</div>

		<!-- Colored Funny Boxes -->            
		<div class="col-md-6">
			<div class="funny-boxes funny-boxes-left-green">
				<div class="row">
					<div class="col-md-4 funny-boxes-img">
						<img alt="" src="{{url('img/usess/book.png')}}" class="img-responsive">
						<ul class="list-unstyled">
							<li><i class="fa fa-briefcase"></i> Valor Curricular</li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2><a href="#">Libros o Capitulos Publicados</a></h2>
						<ul class="list-unstyled funny-boxes-rating">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<p>
							Libros Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, repellendus!
						</p>
					</div>
				</div>                            
			</div>                    
		</div>
	</div>
	<!-- End Funny Boxes -->
</div>
{{HTML::style('css/pages/profile.css')}}
{{HTML::style('css/pages/feature_timeline2.css')}}
{{HTML::style('css/app.css')}}

@stop


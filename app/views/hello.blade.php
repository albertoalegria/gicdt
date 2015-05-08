@extends('layouts.master')
@section('container')
<!--=== Slider ===-->
<div class="slider-inner">
	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			
			<!--<h2>
				Grupo De Investigación Científica Y Desarrollo Tecnológico A.C.
			</h2>-->
			<h2>
				<i>
					Grupo De Investigación
				</i>
				<br>
				<i>
					Científica Y Desarrollo
				</i>
				<br>
				<i>
					Tecnológico A.C.
				</i>

			</h2>
			<!--<h2><i><div>
				
			</div>Grupo De Investigación   </i> <br>  <i>  Científica Y Desarrollo Tecnológico A.C.</i></h2>-->
			<p>
				<i class=" icon-color-grey fa fa-thumbs-up">Colaboradores</i>   <br>
				<i>Doctores </i> 
				<i>Ingenieros </i> 
				<i>Estudiantes</i> 
				<i>Empresas</i> <br>
			</p>
			<div>
				<div class="da-img">
					{{ HTML::image('plugins/parallax-slider/img/1g.png','',['class'=>'img-responsive']) }}
				</div>	
			</div>
			
		</div>
		<div class="da-slide">
			<h2><i>Reconocimientos</i></h2>
			<p><i> Sólo triunfa en el mundo quien se levanta y busca a las circunstancias y las crea si no las encuentra.</i></p>
			<div class="da-img">
				{{ HTML::image('plugins/parallax-slider/img/s2.png','',['class'=>'img-responsive']) }}
			</div>	
		</div>
		<div class="da-slide">
			<h2><i>CONACYT</i></h2>
			<p><i>El Consejo Nacional De Ciencia Y Tecnología </i> <br/> <i>tiene como objetivo impulsar y fortalecer el desarrollo</i> <br/> <i>científico y la modernización tecnológica de México</i></p>
			<div class="da-img">
				{{ HTML::image('plugins/parallax-slider/img/conacyt.png','',['class'=>'img-responsive']) }}

			</div>
		</div>
		<div class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>		
		</div>
	</div>
</div><!--/slider-->
<!--=== End Slider ===-->

<!--=== Content Part ===-->
<div class="container content">	
	<!-- Service Blocks -->
	<div class="row margin-bottom-30">
		<div class="col-md-4">
			<div class="service">
				<i class="fa fa-graduation-cap service-icon"></i>
				<div class="desc">
					<h4>Becas
					</h4>
					<p> El grupo de investigacion cientifíca y desarrollo tecnológico, formula y busca financiamiento sobre programas de becas y de apoyo a la formación de capital humano, científico y tecnológico
					</p>
				</div>
			</div>	
		</div>
		<div class="col-md-4">
			<div class="service">
				<i class="fa fa-search service-icon"></i>
				<div class="desc">
					<h4>Investigadores
					</h4>
					<p>El grupo de investigacion cientifíca y desarrollo tecnológico implementa políticas y programas de apoyo, para promover el desarrollo de la investigación científica y el fortalecimiento académico.
					</p>
				</div>
			</div>	
		</div>
		<div class="col-md-4">
			<div class="service">
				<i class="fa fa-suitcase service-icon"></i>
				<div class="desc">
					<h4>Empresas</h4>
					<p>El grupo de investigacion cientifíca y desarrollo tecnológico, apoya el desarrollo tecnológico y científico de las empresas.</p>
				</div>
			</div>	
		</div>			    
	</div>
	<!-- End Service Blokcs -->

	<!-- Recent Works -->
	<div class="headline"><h2>Proyectos</h2></div>
	<div class="row margin-bottom-20">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnails thumbnail-style thumbnail-kenburn">
				<div class="thumbnail-img">
					<div class="overflow-hidden">
						{{ HTML::image('img/main/m.jpg','',['class'=>'img-responsive']) }}

					</div>
					<a class="btn-more hover-effect" href="#">read more +</a>					
				</div>
				<div class="caption">
					<h3><a class="hover-effect" href="#">2006</a></h3>
					<p>Premio al Mérito Estatal en Investigación y Desarrollo de Oruga de la Ciencia, Obtención del Reniecyt
						1er título de propiedad industrial
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnails thumbnail-style thumbnail-kenburn">
				<div class="thumbnail-img">
					<div class="overflow-hidden">
						{{ HTML::image('img/main/patrulla.png','',['class'=>'img-responsive']) }}

					</div>
					<a class="btn-more hover-effect" href="#">read more +</a>                   
				</div>
				<div class="caption">
					<h3><a class="hover-effect" href="#">2007
					</a></h3>
					
					<p>Desarrollo de luminarias con tecnología LED y aplicación en torretas de patrullas
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnails thumbnail-style thumbnail-kenburn">
				<div class="thumbnail-img">
					<div class="overflow-hidden">
						{{ HTML::image('img/main/casa.jpg','',['class'=>'img-responsive']) }}

					</div>
					<a class="btn-more hover-effect" href="#">read more +</a>                   
				</div>
				<div class="caption">
					<h3><a class="hover-effect" href="#">2008</a></h3>
					<p>Casa Ecológica Sustentable y Facial Mouse, Creación casa muestra con iluminación leds
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnails thumbnail-style thumbnail-kenburn">
				<div class="thumbnail-img">
					<div class="overflow-hidden">
						{{ HTML::image('img/main/p.png','',['class'=>'img-responsive']) }}

					</div>
					<a class="btn-more hover-effect" href="#">read more +</a>                   
				</div>
				<div class="caption">
					<h3><a class="hover-effect" href="#">2009</a></h3>
					<p>Obtención de la primera PATENTE en Chiapas, Semáforo UNO X UNO, Monitoreo ríos con dispositivos móviles, Participación en Cuba
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Recent Works -->

	<!-- Info Blokcs -->
	<div class="row margin-bottom-30">
		<!-- Welcome Block -->
		<div class="col-md-8 md-margin-bottom-40">
			<div class="headline"><h2>Bienvenido al GICDT</h2></div>
			<div class="row">
				<div class="col-sm-4">
					{{ HTML::image('img/main/6.jpg','',['class'=>'img-responsive  margin-bottom-20']) }}

				</div>
				<div class="col-sm-8">
					<p>Anhelamos ser parte activa del crecimiento de nuestro país, mejorar la competitividad de nuestro Estado y Región, coadyuvar en los grupos profesionales y de alto nivel en México, que establecen los criterios para certificar los productos y garantizar su alta calidad, SER UN GRUPO DE INVESTIGACIÓN Y DESARROLLO TECNOLÓGICO PROACTIVO. con colaboracion de: </p>
					<ul class="list-unstyled margin-bottom-20">
						<li><i class="fa fa-check color-green"></i> Doctores</li>
						<li><i class="fa fa-check color-green"></i> Ingenieros</li>
						<li><i class="fa fa-check color-green"></i> Alumnos</li>
						<li><i class="fa fa-check color-green"></i> Empresas</li>
					</ul>                    
				</div>
			</div>

			<blockquote class="hero-unify">
				<p>Que con hechos como la participación en este Honorable Comité, hagamos historia en nuestro Estado y Región, que siendo parte de ellos, coadyuvamos en mejorar la calidad de vida de la sociedad y la rentabilidad de las empresas, así como el impulso a la investigación y desarrollo tecnológico, que tendremos como consecuencia, un MEJOR PAÍS Y PLANETA DONDE VIVIR..</p>
				<small>Walter Torres</small>
			</blockquote>
		</div><!--/col-md-8-->        

		<!-- Latest Shots -->
		<div class="col-md-4">
			<div class="headline"><h2>Proyectos de investigación</h2></div>
			<div id="myCarousel" class="carousel slide carousel-v1">
				<div class="carousel-inner">
					<div class="item active">
						{{ HTML::image('img/main/1p.jpg','') }}


						<div class="carousel-caption">
							<p>2004 : Medalla de Oro en Brasil Mouse
								Y  Desarrollo del Gobierno Expres.</p>
							</div>
						</div>
						<div class="item">
							{{ HTML::image('img/main/m.jpg','') }}
							<div class="carousel-caption">
								<p>2005      Premio al Mérito Estatal en Investigación y Participación en Chile 
								</p>
							</div>
						</div>
						<div class="item">
							{{ HTML::image('img/main/5p.jpg','') }}
							<div class="carousel-caption">
								<p>2006      Premio al Mérito Estatal en Investigación y Desarrollo de Oruga de la Ciencia, Obtención del Reniecyt
									1er título de propiedad industrial
								</p>
							</div>
						</div>
						<div class="item">
							{{ HTML::image('img/main/patrulla.png','') }}
							<div class="carousel-caption">
								<p>2007      Desarrollo de luminarias con tecnología LED y aplicación en torretas de patrullas

								</p>
							</div>
						</div>
						<div class="item">
							{{ HTML::image('img/main/casa.jpg','') }}
							<div class="carousel-caption">
								<p>2008         Casa Ecológica Sustentable y Facial Mouse, Creación casa muestra con iluminación leds

								</p>
							</div>
						</div>
							<div class="item">
							{{ HTML::image('img/main/p.png','') }}
							<div class="carousel-caption">
								<p>2009        Obtención de la primera PATENTE en Chiapas, Semáforo UNO X UNO, Monitoreo ríos con dispositivos móviles, Participación en Cuba

								</p>
							</div>
						</div>



						

					</div>

					<div class="carousel-arrow">
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div><!--/col-md-4-->
		</div>	
		<!-- End Info Blokcs -->

		<!-- Our Clients -->
		<div id="clients-flexslider" class="flexslider home clients">
			<div class="headline"><h2>Vinculación con instituciones</h2></div>    
			<ul class="slides">
				<li>
					<a href="#">
						{{ HTML::image('img/clients/1c.png','') }}
						{{ HTML::image('img/clients/1c.png','',['class'=>'color-img']) }}

					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/2c.png','') }}
						{{ HTML::image('img/clients/2c.png','',['class'=>'color-img']) }}
					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/3c.png','') }}
						{{ HTML::image('img/clients/3c.png','',['class'=>'color-img']) }}

					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/4c.png','') }}
						{{ HTML::image('img/clients/4c.png','',['class'=>'color-img']) }}

					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/5c.png','') }}
						{{ HTML::image('img/clients/5c.png','',['class'=>'color-img']) }}

					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/6c.png','') }}
						{{ HTML::image('img/clients/6c.png','',['class'=>'color-img']) }}

					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/7c.png','') }}
						{{ HTML::image('img/clients/7c.png','',['class'=>'color-img']) }}

					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/8c.png','') }}
						{{ HTML::image('img/clients/8c.png','',['class'=>'color-img']) }}

					</a>
				</li>
				<li>
					<a href="#">
						{{ HTML::image('img/clients/9c.png','') }}
						{{ HTML::image('img/clients/9c.png','',['class'=>'color-img']) }}

					</a>
				</li>


				<li>

				</ul>
			</div><!--/flexslider-->
			<!-- End Our Clients -->
		</div><!--/container-->		
		@stop
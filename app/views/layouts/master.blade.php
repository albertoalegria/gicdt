<!DOCTYPE html>
<head>
	<title>Grupo de Investigación Científica Y Desarrollo Tecnológico</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="favicon.ico">
	{{ HTML::style('plugins/bootstrap/css/bootstrap.min.css',['media'=>'screen']) }}
	{{ HTML::style('css/style.css',['media'=>'screen']) }}
	{{ HTML::style('plugins/line-icons/line-icons.css') }}
	{{ HTML::style('plugins/font-awesome/css/font-awesome.min.css')	 }}
	{{ HTML::style('plugins/flexslider/flexslider.css') }}
	{{ HTML::style('plugins/parallax-slider/css/parallax-slider.css') }}
	{{ HTML::style('plugins/flexslider/flexslider.css') }}
	{{ HTML::style('css/themes/default.css',['id'=>'style_color']) }}
	{{ HTML::script('plugins/jquery-1.10.2.min.js') }}		
</head>	

<body>
	<div class="wrapper">
		<!--=== Header ===-->    
		<div class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<ul class="loginbar pull-right">
						
						<li><a href="{{url('help')}}">Ayuda</a></li>  
						<li class="topbar-devider"></li>
						<li> {{ HTML::link('user','Login')}}</li>  
						
					</ul>
				</div>
			</div>
			<!-- End Topbar -->

			<!-- Navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">GICDT</span>
							<span class="fa fa-bars"></span>
						</button>
						<a class="navbar-brand" href="{{url()}}">
							{{ HTML::image('img/logo1-default.png','Logo',['id'=>'logo-header']) }}

						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<!-- Home -->
							<li><a href="{{url()}}">Home</a></li>
							<!-- Pages -->                        
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									Quiénes Somos
								</a>
								<ul class="dropdown-menu">
									<!-- About Pages -->
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Nosotros</a>
										<ul class="dropdown-menu">
											<li><a href="{{url('about')}}">Misión y Visión</a></li>
											<li><a href="">Equipo de Trabajo</a></li>
										</ul>                                
									</li>
								</ul>
							</li>
							<!-- End Pages -->

							<!-- Features -->
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									Cursos
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Cursos Disponibles</a>
										<ul class="dropdown-menu">
											<li><a href="{{url('curso/all')}}"><i class="fa fa-sort-alpha-asc"></i>Todos los cursos</a></li>
											<li><a href="#"><i class="fa fa-magic"></i>Gratuitos</a></li>
										</ul>                                
									</li>

									
									<li >
										<a href="">Cuerpo Acádemico</a>
										
									</li>
									<li >
										<a href="{{url('curso/search')}}">Buscar cursos</a>
										
									</li>
								</ul>
							</li>
							<!-- End Features -->

							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									CVU
								</a>
								<ul class="dropdown-menu">
									<li><a href="{{url('sistema/cvu')}}">Entrar</a></li>
									<li><a href="info#cvu">Información</a></li>
									<li><a href="descargas#cvu">Manual de Operaciones</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="{{url('contacto')}}">Contacto</a>
							</li>                    
							<!-- End Contacts -->

							<!-- Search Block -->
							<li>
								<i class="search fa fa-search search-btn"></i>
								<div class="search-open">
									<div class="input-group animated fadeInDown">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button class="btn-u" type="button">Go</button>
										</span>
									</div>
								</div>    
							</li>
							
						</ul>
					</div><!--/navbar-collapse-->
				</div>    
			</div>            
			<!-- End Navbar -->
		</div>
		<!--=== End Header ===-->    

		@yield('container')

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 md-margin-bottom-40">
						<!-- About -->
						<div class="headline"><h2>Grupo de Investigación Científica del Estado de Chiapas</h2></div>  
						<p class="margin-bottom-25 md-margin-bottom-40">www.elgrupo.mx</p>    
						<!-- End About -->

						<!-- Monthly Newsletter -->
						<div class="headline"><h2>Noticias</h2></div> 
						<p></p>
						<form class="footer-subsribe">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Email Address">                            
								<span class="input-group-btn">
									<button class="btn-u" type="button">Subscribe</button>
								</span>
							</div>                  
						</form>                         
						<!-- End Monthly Newsletter -->
					</div><!--/col-md-4-->  
					<div class="col-md-4">
						<!-- Contact Us -->
						<div class="headline"><h2>Contáctanos</h2></div> 
						<ul class="list-unstyled who margin-bottom-30">
							<li><a href="#"><i class="fa fa-home"></i>7 Oriente Sur 565-C. C.P.:29000.
								Tuxtla Gutiérrez, Chiapas.</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>waltertorres@elgrupo.mx</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>044 961 112 1331</a></li>
								<li><a href="#"><i class="fa fa-globe"></i>http://www.elgrupo.mx</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<div class="headline"><h2>Mantente conectado</h2></div> 
							<ul class="social-icons">
								<li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
								<li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
								<li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
								<li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
								<li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
								<li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
								<li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
							</ul>
							<!-- End Social Links -->
						</div><!--/col-md-4-->
					</div>
				</div> 
			</div><!--/footer-->
			<!--=== End Footer ===-->

			<!--=== Copyright ===-->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-10">                     
							<p>
								2014 &copy; GICDT, Developers Tóala Pérez Manuel de Jesús, Todos los derechos reservados. 
								<a href="#">Politicas de Privacidad</a> | <a href="#">Términos del Servicio</a>
							</p>
						</div>
						<div class="col-md-2">  
							<a href="/">

								<img class="pull-right" id="logo-footer" src="img/logo1-default.png" alt="">
							</a>
						</div>
					</div>
				</div> 
			</div><!--/copyright--> 
			<!--=== End Copyright ===-->
		</div><!--/wrapper-->
		{{ HTML::script('plugins/jquery-migrate-1.2.1.min.js') }}		
		{{ HTML::script('plugins/bootstrap/js/bootstrap.min.js') }}			
		{{ HTML::script('plugins/back-to-top.js') }}		
		{{ HTML::script('plugins/flexslider/jquery.flexslider-min.js') }}		
		{{ HTML::script('plugins/parallax-slider/js/modernizr.js') }}		
		{{ HTML::script('plugins/parallax-slider/js/jquery.cslider.js') }}		
		{{ HTML::script('js/app.js') }}		
		{{ HTML::script('js/pages/index.js') }}		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initSliders();
				Index.initParallaxSlider();        
			});
		</script>

	</body>
	</html>	

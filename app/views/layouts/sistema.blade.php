<!DOCTYPE html>
<head>
	<title>Grupo de Investigacion Cientifica</title>
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
	{{ HTML::style('plugins/flexslider/flexslider.css')}}
	{{ HTML::style('plugins/flexslider/bootstrap-datetimepicker.min.css')}}

	{{ HTML::style('css/themes/default.css',['id'=>'style_color']) }}
	{{ HTML::style('css/dataTables.bootstrap.css') }}

	{{ HTML::script('plugins/jquery-1.10.2.min.js') }}

</head>	

<body>
	<!--=== Style Switcher ===-->    
	<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
	<div class="style-switcher animated fadeInRight">
		<div class="theme-close"><i class="icon-close"></i></div>
		<div class="theme-heading">Theme Colors</div>
		<ul class="list-unstyled">
			<li class="theme-default theme-active" data-style="default" data-header="light"></li>
			<li class="theme-blue" data-style="blue" data-header="light"></li>
			<li class="theme-orange" data-style="orange" data-header="light"></li>
			<li class="theme-red" data-style="red" data-header="light"></li>
			<li class="theme-light last" data-style="light" data-header="light"></li>

			<li class="theme-purple" data-style="purple" data-header="light"></li>
			<li class="theme-aqua" data-style="aqua" data-header="light"></li>
			<li class="theme-brown" data-style="brown" data-header="light"></li>
			<li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
			<li class="theme-light-green last" data-style="light-green" data-header="light"></li>
		</ul>
		<div style="margin-bottom:18px;"></div>
		<div class="theme-heading">Layouts</div>
		<div class="text-center">
			<a href="javascript:void(0);" class="btn-u btn-u-green btn-block active-switcher-btn wide-layout-btn">Wide</a>
			<a href="javascript:void(0);" class="btn-u btn-u-green btn-block boxed-layout-btn">Boxed</a>
		</div>
	</div><!--/style-switcher-->
	<!--=== End Style Switcher ===-->    

	<div class="wrapper">
		<!--=== Header ===-->    
		<div class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<ul class="loginbar pull-right">
						
						<li><a href="{{url('help')}}">Ayuda</a></li>  
						<li class="topbar-devider"></li>   
						<li> Bienvenido ! <i class='fa fa-child'> {{Auth::user()->nombre.' '.Auth::user()->ap_pat}}</i> </li>   
						<li class="topbar-devider"></li> 
						<li><a href="{{url('user/logout')}}">Salir</a></li>  

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
						<a class="navbar-brand" href="{{url('sistema')}}">
							{{ HTML::image('img/logo1-default.png','Logo',['id'=>'logo-header']) }}

						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
						<!-- Admin -->
						<!-- Admin 
							<li><a href="{{url('admin/admin')}}">Admin</a></li>-->
						
							<!-- Home -->
							<li>{{HTML::link('sistema','Inicio')}}</li>


							<!-- Pages -->                        
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									Revista Tecnológica 
								</a>
								<ul class="dropdown-menu">
									<!-- About Pages -->
									<li>
										<a href="javascript:void(0);">Ver Ejemplares</a>

									</li>
									<li><a href="">Manuales de Operación</a></li>
									<li><a href="">Crear Nueva Revista</a></li>
									<li><a href="">Convocatorias</a></li>

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
											<li><a href="{{url('curso/gratuitos')}}"><i class="fa fa-magic"></i>gratuitos</a></li>
										</ul>                                
									</li>
									
									
									<li >
										<a href="">Cuerpo Academico</a>

									</li>
									

									<li >
										<a href="{{url('curso/agregar')}}">Ofertar Cursos</a>

									</li>

									<li >
										<a href="{{url('curso/miscursos')}}">Mis Cursos</a>

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
									<li><a href="{{url('info#cvu')}}">Información</a></li>
									<li><a href="{{url('descargas#cvu')}}">Manual de Operaciones</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle='dropdown'>Congresos</a>
								<ul class="dropdown-menu">
									<li><a href="">Ver Congresos Disponibles</a></li>
									<li><a href="">Constancias de Congresos</a></li>
								</ul>
							</li>  
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle='dropdown'>Bolsa de Trabajo</a>
								<ul class="dropdown-menu">
									<li><a href="">Ver Vacantes</a></li>
									<li><a href="">Ofertar</a></li>

								</ul>
							</li>                    
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
		<div class="footer-v2">

			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 md-margin-bottom-40">
							<!-- About -->
							<div class="headline"><h2>Grupo de Investigacion Cientifia del estado de Chiapas</h2></div>  

						</div><!--/col-md-4-->  
						<div class="col-md-4">
							<!-- Contact Us -->
							<div class="headline"><h2>Contactanos</h2></div> 
							<address class="md-margin-bottom-40">
								25, Lorem Lis Street, Orange <br />
								California, US <br />
								Phone: 800 123 3456 <br />
								Fax: 800 123 3456 <br />
								Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
							</address>
							<!-- End Contact Us -->

							<!-- Social Links -->

							<!-- End Social Links -->
						</div><!--/col-md-4-->
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
						</div>
					</div>
				</div> 
			</div><!--/footer-->
		</div>
		<!--=== End Footer ===-->

		<!--=== Copyright ===-->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">                     
						<p>
							2014 &copy; GICDT, Developers Toala Perez Manuel de Jesus , Todos los derechos reservados. 
							<a href="#">Politicas de Privacidad</a> | <a href="#">Terminos del Servicio</a>
						</p>
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
	{{HTML::script('plugins/counter/waypoints.min.js')}}
	{{HTML::script('plugins/counter/jquery.counterup.min.js')}}
	{{HTML::script('plugins/counter/jquery.counterup.min.js')}}
	{{HTML::script('js/jquery.dataTables.min.js')}}
	{{HTML::script('js/dataTables.bootstrap.js')}}
	{{HTML::script('js/plugins/datepicker.js')}}
	{{ HTML::script('js/pages/moment.js') }}

	{{ HTML::script('js/pages/bootstrap-datetimepicker.js') }}

	
	<script type="text/javascript">
		$(document).ready(function() {
			$('.DataTable').dataTable();
		});
		jQuery(document).ready(function() {
			App.init();
			App.initSliders();
			Index.initParallaxSlider();  
			App.initCounter();    

		});
	</script>

</body>
</html>	

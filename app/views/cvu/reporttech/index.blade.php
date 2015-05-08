@extends('layouts.sistema')
@section('container')
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">CVU</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="{{url('sistema')}}">Sistema</a></li>
			<li><a href="{{url('sistema/cvu')}}">CVU</a></li>
			<li><a href="{{url('ReportTech')}}">Reportes Técnicos</a></li>
			<li class="active">Mi Reporte</li>
		</ul>
	</div>
</div>
<div class="container content">
	<div class="row portfolio-item margin-bottom-50"> 
		<!-- Carousel -->
		<div class="col-md-7">
			<div class="carousel slide carousel-v1" id="myCarousel">
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="{{url("otros/reportes/$report->img")}}">
						<div class="carousel-caption">
							<p>{{$report->titulo}}</p>
						</div>
					</div>

				</div>


			</div>
		</div>
		<!-- End Carousel -->

		<!-- Content Info -->        
		<div class="col-md-5">
			<h2>{{$report->titulo}}</h2>
			<p>{{$report->descripcion}}</p>
			<ul class="list-unstyled">
				<li><i class="fa fa-user color-green"></i> {{$report->autores}}</li>
				<li><i class="fa fa-calendar color-green"></i> {{$report->fecha}}</li>
				<li><i class="fa fa-tags color-green"></i> {{$report->keywords}}</li>
				<li>
					<a href='{{url("otros/reportes/$report->file")}}'  ><span class="item">
						<i class="fa fa-file-archive-o color-green"></i>
						Descargar Archivo Completo
					</span></a>
				</li>
			</ul>
			<a href="#" class="btn-u btn-u-large">Pedir Mas Información</a>
			
		</div>
		<!-- End Content Info -->        
	</div>
	<div class="tag-box tag-box-v2">
		<h3>Objetivo</h3>
		<p>{{$report->objetivo}}</p>
	</div>
	<div id="disqus_thread"></div>
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'elgrupomx'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
        	var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        	dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
</div>
@stop
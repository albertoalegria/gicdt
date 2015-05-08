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
		<!-- Carousel -->
		<div class="col-md-6 overflow-hidden">

			<div class="view view-tenth">


				{{ HTML::image("cursos/portadas/$k->logo",'Logo',['class'=>'img-responsive','width'=>'100%']) }}

				<div>
				</div>
			</div>

			
			<div class="circle" id="circles-1">

			</div>

			<h3> <i class="fa fa-graduation-cap color-green"></i>Tipo:{{$k->tipo}}</h3>
			<h4><a href="/cursos/temarios/{{$k->temario}}" target="_blank"><i class="   fa fa-chain-broken">Descargar Temario</i></a></h4>

			<a href='{{url("/curso/registro/$k->id")}}' class="btn-u btn-u-large">Registrarse en el Curso</a>
		</ul>
	</div>
	<!-- End Carousel -->

	<!-- Content Info -->        
	<div class="col-md-5">
		<h2>{{$k->nombre}}</h2>
		<ul class="list-unstyled list-inline blog-info">


			<li><i class="fa fa-user color-green"></i>{{HTML::link("user/$usr->id",$usr->nombre.' '.$usr->ap_pat.''.$usr->ap_mat)}}</li>

			<li><i class="fa fa-calendar color-green"></i>{{$k->fechas}}</li>
			<li><i class="fa  fa-usd color-green"></i> {{$k->couta}}</li>
			<li><i class="fa fa-tags color-green"></i> {{$k->keywords}}</li>
			
			<br><li> <i class="fa fa-graduation-cap color-green"></i>Cupo máximo:{{$k->cupo}}</li></br>
			<li><i class="fa fa-map-marker color-green"> </i> {{$k->lugar}}  </li>     

		</ul>
		<h3 class="heading-xs"><i class="fa fa-bar-chart-o"></i>Lugares Disponibles<span class="pull-right">
			{{$f=$k->cupo-$count}}</span></h3>

			<div class="progress progress-u progress-xx">
				<div style="width: {{(100/$k->cupo)*$f}}%" aria-valuemax="{{$k->cupo}}" aria-valuemin="0" aria-valuenow="{{$f}}" role="progressbar" class="progress-bar progress-bar-u">
				</div>
			</div>


			<p>{{$k->descr}}</p>
			<ul class="list-unstyled">

			</ul>

		</div>
		<!-- End Content Info -->        
	</div>
	<h2 class="text-center">Preguntas</h2>
	<div id="disqus_thread"></div>
</div>



<script type="text/javascript" src="{{url()}}/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="{{url()}}/plugins/circles-master/circles.js"></script>
<script>
	$(document).ready(function() {
		Circles.create({
			id:         'circles-1',
			percentage:  {{100/$k->cupo*$f}},
			radius:     80,
			width:      10,
			number:     {{$k->cupo-$count}},
			text:       ' Lugares Disponibles',
			colors:     ['#eee', '#72c02c'],
			duration:   2000
		})
		
	});

</script>

<style>
	.circles-text{

		font-size: 10px;
	}
</style>
<script type="text/javascript">
	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'elgrupo'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
        	var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        	dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    @stop
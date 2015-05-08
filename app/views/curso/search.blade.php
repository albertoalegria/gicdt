 @extends('layouts.master')

 @section('container')




 <body>

    <!--=== Breadcrumbs v3 ===-->
    <div class="breadcrumbs-v3">
        <div class="container">
            <h1 class="pull-left">Search Results</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Cursos</a></li>
                <li class="active">Search results</li>
            </ul>
        </div>
    </div>
   

        <!--=== Search Block Version 2 ===-->




        <!--=== Search Block Version 2 ===-->

         
         <!--=== End Breadcrumbs v3 ===-->

        <div class="search-block-v2">
         <div class="container">
                <div class="col-md-6 col-md-offset-3">
                 <h2>Buscar   Cursos</h2>
    {{Form::open(array

        (
            'action'=>'cursos@postbuscar',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
             
            ))
        }}


{{Form::input('text','buscar', Input::get('buscar'),array('class'=>'form-control'))}}
{{Form::input('submit','null', 'buscar',array('class'=>'btn btn-warning'))}}
{{Form::close()}}
 
            </div>    
        </div><!--/container-->
  </div>
        <!--=== End Search Block Version 2 ===-->



        <!--=== Search Results ===-->
        <div class="container s-results margin-bottom-50">
            <div class="row">
                <div class="col-md-2 hidden-xs related-search">
                    <div class="row">
                        <div class="col-md-12 col-sm-4">
                            <h3></h3>
                            <ul class="list-unstyled">
                                <li><a href="#"></a></li>     
                                <li><a href="#"</a></li>   
                                <li><a href="#"></a></li>   
                            </ul>
                            <hr>
                        </div>    

                        <div class="col-md-12 col-sm-4">    
                            <h3>Categorias</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Curso</a></li>     
                                <li><a href="#">Diplomado</a></li>   
                                <li><a href="#">Capacitación</a></li>   
                            </ul>
                            <hr>
                        </div>    

                        <div class="col-md-12 col-sm-4">
                            <h3>Topicos</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Bootstrap</a></li>     
                                <li><a href="#">Wrapbootstrap</a></li>     
                                <li><a href="#">Codrops</a></li>     
                            </ul>
                            <hr>
                        </div>    

                        <div class="col-md-12 col-sm-4">                        
                            <h3>Historial</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Web design articles</a></li>   
                                <li><a href="#">Tutorials for web design</a></li>     
                            </ul>
                            <a class="see-all" href="#">See all</a>
                            <hr>
                        </div>    


                    </div>        
                </div><!--/col-md-2-->

                <div class="col-md-10">
                 
                    <label class="label label-info">Pagina {{$paginacion->getCurrentPage()}} de un total de {{$paginacion->getTotal()}} Paginas</label>
                  
                    <hr>



                </div>
            </a>
        </li>
    </ul>


    <!-- Begin Inner Results -->
    @foreach ($paginacion as $row)

    <div class="container">
        <h3><a href="#">Title: {{$row->nombre}}</a></h3>
        <ul class="list-inline up-ul">
            <li></li>
            <li class="btn-group">
                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                    More<i class="fa fa-caret-down"></i>
                    <span class="sr-only">Toggle Dropdown</span>                            
                </button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Share</a></li>
                    <li><a href="#">Similar</a></li>
                    <li><a href="#">Advanced search</a></li>
                </ul>
            </li>
            <li><a href="#">Tipo:{{$row->tipo}}</a></li>
            <li><a href="#">keywords :{{$row->keywords}}</a></li>
            
        </ul>
        <div class="overflow-h">
        {{ HTML::image("cursos/portadas/$row->logo",'Logo',['class'=>'img-responsive','width'=>'10%']) }}
            <div class="overflow-a">
                <p>Descripcion.</p>
                <ul class="list-inline down-ul">
                    <li>
                        <ul class="list-inline star-vote">
                            <li><i class="color-green fa fa-star"></i></li>
                            <li><i class="color-green fa fa-star"></i></li>
                            <li><i class="color-green fa fa-star"></i></li>
                            <li><i class="color-green fa fa-star"></i></li>
                            <li><i class="color-green fa fa-star-half-o"></i></li>
                        </ul>
                    </li>
                    <li>{{$row->keywords}}</li>
                    <li>Tipo:{{$row->tipo}}</li>
                </ul>
            </div>       
        </div>  
        @endforeach  
    </div>

</div> 
</div>





</div>
</div>
</div>
</div> 
</div></body>






<div class="container">
    {{$paginacion->appends(array("buscar"=>Input::get("buscar")))->links()}}
</div>
<!-- END Inner Results -->






<!-- JS Global Compulsory -->           
<script>
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();      
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->


    <div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"></div></body>


    @stop
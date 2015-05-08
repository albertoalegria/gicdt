@extends('layouts.sistema')
@section('container')
{{HTML::style('css/pages/profile.css')}}
{{HTML::style('plugins/scrollbar/src/perfect-scrollbar.css')}}
{{HTML::style('plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css')}}
{{HTML::script('plugins/scrollbar/src/perfect-scrollbar.js')}}

<div class="profile container content">
    	<div class="row">
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive profile-img margin-bottom-20" src="{{url('img/users').'/'.Auth::user()->img}}" alt="">
                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item active">
                        <a href="{{url('user/perfil')}}"><i class="fa fa-bar-chart-o"></i> {{Auth::user()->nombre}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url('user/perfil')}}"><i class="fa fa-user"></i> Perfil</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url('user/all')}}"><i class="fa fa-group"></i> Usuarios</a>
                    </li>                                        
                    <li class="list-group-item">
                        <a href="{{url('proyectos/me')}}"><i class="fa fa-cubes"></i> Mis Proyectos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url('face/publish')}}"><i class="fa fa-history"></i>Red Social</a>
                    </li>                                       
                    <li class="list-group-item">
                        <a href="{{url('user/perfil/settings')}}"><i class="fa fa-cog"></i> Configuración</a>
                    </li> 
                </ul>   

                <div class="panel-heading-v2 overflow-h">
                    <h2 class="heading-xs pull-left"><i class="fa fa-bar-chart-o"></i>  Progreso </h2>
                    <a href="#"><i class="fa fa-cog pull-right"></i></a>
                </div>
                <h3 class="heading-xs">CVU <span class="pull-right">92%</span></h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">
                    </div>
                </div>
                <h3 class="heading-xs">Revista<span class="pull-right">85%</span></h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-blue">
                    </div>
                </div>

                <hr>

                <!--Notification-->
                <div class="panel-heading-v2 overflow-h">
                    <h2 class="heading-xs pull-left"><i class="fa fa-bell-o"></i> Notificaciones</h2>
                    <a href="#"><i class="fa fa-cog pull-right"></i></a>
                </div>
                <ul id="scrollbar5" class="list-unstyled contentHolder margin-bottom-20 ps-container">
                    <li class="notification">
                        <i class="icon-custom icon-sm rounded-x icon-bg-red icon-line icon-envelope"></i>
                        <div class="overflow-h">
                            <span><strong>Albert Heller</strong> has sent you email.</span>
                            <small>Two minutes ago</small>
                        </div>    
                    </li>
                    
               
            </div>
            <!--End Left Sidebar-->
            <div class="col-md-9">
                <!--Profile Body-->
                <div class="profile-body">
                    <!--Service Block v3-->
                    <div class="row margin-bottom-10">
                       
                        
                        <div class="col-sm-6">
                            <div class="service-block-v3 servive-block-blue">
                                <i class="icon-screen-desktop"></i>
                                <span class="service-heading">Progreso de tu CVU</span>
                                <span class="counter">1</span>
                                
                                <div class="clearfix margin-bottom-10"></div>
                                
                                <div class="row margin-bottom-20">
                                    <div class="col-xs-6 service-in">
                                        <small>Bloques Concluidos</small>
                                        <h4 class="counter">26</h4>
                                    </div>
                                    <div class="col-xs-6 text-right service-in">
                                        <small>Dias en la Plataforma</small>
                                        <h4 class="counter">90</h4>
                                    </div>
                                </div>
                                <div class="statistics">
                                <h3 class="heading-xs">Estadísticas en Barra de progreso <span class="pull-right">1%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 1%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                    <!-- <small>15% higher <strong>than last month</strong></small> -->
                                </div>            
                            </div>
                        </div>
                    </div><!--/end row-->
	                    <!--End Service Block v3-->

                    <hr>

                    <div class="row margin-bottom-20">
                        <!--Profile Post-->
                        <div class="col-sm-6">
                            <div class="panel panel-profile no-bg">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i>Notas</h2>
                                    <a href="#"><i class="fa fa-cog pull-right">Agregar</i></a>
                                </div>
                                <div id="scrollbar" class="panel-body contentHolder ps-container">
                                    <div class="profile-post color-one">
                                        <span class="profile-post-numb">01</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Urgente</a></h3>
                                            <p>Debes de Unir</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-two">
                                        <span class="profile-post-numb">02</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Nota de Prueba</a></h3>
                                            <p>Web Design &amp; Development News</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-three">
                                        <span class="profile-post-numb">03</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Hola ....</a></h3>
                                            <p>Basic prototype of a package manager for Sketch</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-four">
                                        <span class="profile-post-numb">04</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Amazing Portfolio</a></h3>
                                            <p>Create a free online portfolio lookbook with Readz</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-five">
                                        <span class="profile-post-numb">05</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Discover New Features</a></h3>
                                            <p>More than 100+ amazing add-ons coming soon...</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-six">
                                        <span class="profile-post-numb">06</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Corporation Plans</a></h3>
                                            <p>Discussion of new corporation plans</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-seven">
                                        <span class="profile-post-numb">07</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Project Updates</a></h3>
                                            <p>New features of coming update</p>
                                        </div>
                                    </div>
                                <div class="ps-scrollbar-x-rail" style="width: 389px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; display: inherit; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 200px;"></div></div></div>
                            </div>        
                        </div>
                        <!--End Profile Post-->
                        <div class="col-sm-6 md-margin-bottom-20">
                            <div class="panel panel-profile no-bg">
                                <div class="panel-heading overflow-h bg-red ">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-briefcase"></i>Próximos eventos</h2>
                                    <a href="#"><i class="fa fa-cog pull-right"></i></a>
                                </div>
                                <div id="scrollbar2" class="panel-body contentHolder ps-container">
                                    @foreach($events as $k)
                                    <div class="profile-event">
                                        <div class="date-formats">
                                            <span>{{date('d',strtotime($k->fecha))}}</span>
                                            <small>{{date('M',strtotime($k->fecha))}}, {{date('Y',strtotime($k->fecha))}}</small>
                                        </div>
                                        <div class="overflow-h">
                                            <h3 class="heading-xs"><a href="#">{{$k->nombre}}</a></h3>
                                            <p>{{$k->descripcion}}</p>
                                        </div>    
                                    </div>
                                    @endforeach
                                   
                                <div class="ps-scrollbar-x-rail" style="width: 389px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; display: inherit; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 181px;"></div></div></div>    
                            </div>
                        </div>
                        <!--End Profile Event-->
                    </div><!--/end row-->

                    <hr>
                    
                   

                    
                        </div>    
                    </div>
                    <!--End Table Search v2-->
                </div>
                <!--End Profile Body-->
            </div>
        </div><!--/end row-->
</div>
	{{HTML::script('plugins/sky-forms/version-2.0.1/js/jquery-ui.min.js')}}	
	{{HTML::script('js/plugins/datepicker.js')}}

   <script>	
   	$(document).ready(function() {
   		 $('.contentHolder').perfectScrollbar();
   		   Datepicker.initDatepicker();
   	});
   </script>
@stop
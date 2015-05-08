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
                        <div class="ibox float-e-margins">


                            <div class="col-lg-6  ">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <span class="label label-success pull-right">Monthly</span>
                                    <h3 class="panel-title"><i class="fa fa-globe"></i> Usuarios Registrados</h3>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">{{ $n=(count($users = User::all()));}}</h1>
                                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                    <small>Total income</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-612">


                            <div>
                                <canvas id="lineChart" height="191" width="819" style="width: 819px; height: 191px;"></canvas>

                            </div><!--/end row-->
                            <!--End Service Block v3-->

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Cursos registrados </h5>
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins">{{ $n=(count($cursos = Curse::all()));}}</h1>
                                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                        <small>Total income</small>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-grey margin-bottom-40">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-globe"></i> Cursos Registrados</h3>
                                </div>
                                <div class="panel-body"></div>
                                <table class =  " table DataTable table-bordered table-striped" >

                                    <thead>

                                        <tr>
                                            <th>Categoria</th>
                                            <th class="hidden-sm">Nombre del curso</th>
                                            <th>Opciones</th>
                                            <th>Status</th>
                                            <th>Activar Curso</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cursos as $k)
                                      <tr>
                                        <td>{{$k->tipo}}</td>
                                        <td>{{$k->nombre}}</td>
                                        <td class="hidden-sm"> <a href='{{url("curso/delete/$k->id")}}' class="btn btn-danger btn-xs" ><i class="fa fa-trash-o">  </i> Eliminar</a>

                                         <a href='{{url("curso/view/$k->id")}} ' class="btn btn-success btn-xs"><i class="fa fa-check" >  </i>Ver</a>


                                     </td>
                                     <td>{{$k->status}}</td>
                                     <td>
                                         <a href='{{url("curso/val/$k->id")}} ' class="btn btn-warning btn-xs"><i class="fa fa-check" >  </i>Activar o Desactivar </a>



                                     </td>
                                 </tr>
                                 @endforeach     

                             </tbody>
                         </table>
                     </div>                      
                 </div>

                 <hr>
             </div>  
         </div>
     </div></div>
     <div class="row margin-bottom-20">
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

{{HTML::script('js/plugins/chartJs/Chart.min.js')}}

<script> 
    $(document).ready(function() {
       $('.contentHolder').perfectScrollbar();
       Datepicker.initDatepicker();
   });
</script>
<script>
    $(document).ready(function() {

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
            {
                label: "Example dataset",
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "Example dataset",
                fillColor: "rgba(26,179,148,0.5)",
                strokeColor: "rgba(26,179,148,0.7)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(26,179,148,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
            ]
        };

        var lineOptions = {
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleGridLineWidth: 1,
            bezierCurve: true,
            bezierCurveTension: 0.4,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: true,
            responsive: true,
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

    });
</script>

@stop
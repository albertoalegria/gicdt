

<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo de Investigacion Cientifica</title>


    {{ HTML::style('css/bootstrap.min.css') }}   
    {{ HTML::style('css/plugins/morris/morris-0.4.3.min.css') }}
    {{ HTML::style('css/animate.css') }}
    {{ HTML::style('plugins/font-awesome/css/font-awesome.min.css')  }}

    {{ HTML::style('css/style/style.css') }}

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <a class="navbar-brand" href="/">
        {{ HTML::image('img/logo1-default.png','Logo',['id'=>'logo-header']) }}
    </a>
</head>


<body class="fixed-navigation">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img class="img-responsive profile-img margin-bottom-20" src="{{url('img/users').'/'.Auth::user()->img}}" alt="">
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrador<div>{{Auth::user()->nombre}}

                            </div> </strong>
                        </span> <span class="text-muted text-xs block">Panel de administracion <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">

                    </div>
                </li>
                <li class="active">
                    <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">HOME</span> <span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">
                        <li><a href="index-2.html">Noticias</a></li>
                        <li><a href="dashboard_2.html">Cursos</a></li>
                        <li class="active"><a href="dashboard_3.html">Mensajes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label"> Gráficas y Reportes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="graph_flot.html">Flot Charts</a></li>
                        <li><a href="graph_morris.html">Morris.js Charts</a></li>
                        <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                        <li><a href="graph_chartjs.html">Chart.js</a></li>
                        <li><a href="graph_peity.html">Peity Charts</a></li>
                        <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="mailbox.html">Inbox</a></li>
                        <li><a href="mail_detail.html">Email view</a></li>
                        <li><a href="mail_compose.html">Compose email</a></li>
                        <li><a href="email_template.html">Email templates</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-university "></i> <span class="nav-label">Empresas</span> </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users "></i> <span class="nav-label"></span>Administrador de Usuarios<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="form_basic.html">Basic form</a></li>
                        <li><a href="form_advanced.html">Advanced Plugins</a></li>
                        <li><a href="form_wizard.html">Wizard</a></li>
                        <li><a href="form_file_upload.html">File Upload</a></li>
                        <li><a href="form_editors.html">Text Editor</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-graduation-cap "></i> <span class="nav-label">Administrador de  Cursos</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{url('admin/admincurso')}}">Todos</a></li>  
                        <li><a href="profile.html">De pago</a></li>
                        <li><a href="projects.html">Gratuitos</a></li>
                        
                    </ul>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Search</span><span class="label label-info pull-right">NEW</span></a>
                    <ul class="nav nav-second-level">

                        <li><a href="toastr_notifications.html">Notification</a></li>
                        <li><a href="nestable_list.html">Nestable list</a></li>
                        <li><a href="timeline_2.html">Timeline v.2</a></li>
                        <li><a href="forum_main.html">Forum view</a></li>
                        <li><a href="google_maps.html">Google maps</a></li>
                        <li><a href="code_editor.html">Code editor</a></li>
                        <li><a href="modal_window.html">Modal window</a></li>
                        <li><a href="validation.html">Validation</a></li>
                    </ul>
                </li>


            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg sidebar-content">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="http://webapplayers.com/inspinia_admin-v1.8/search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Bienvenido  al Panel de Administración <br>{{Auth::user()->nombre.' '.Auth::user()->ap_pat}}
                            </span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">

                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div>

                                            <h2 class="text-center">Preguntas</h2>
                                            <div id="disqus_thread"></div>
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div>
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                        </a>
                                        <div>
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="grid_options.html">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="login.html">
                                <i ></i> 
                                <li><a  class="fa fa-sign-out" href="{{url('user/logout')}}">Cerrar sesión</a></li> 
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="sidebard-panel">
                <div>
                    <h4>Messages <span class="badge badge-info pull-right">16</span></h4>
                    <div class="feed-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a1.jpg">
                        </a>
                        <div class="media-body">
                            There are many variations of passages of Lorem Ipsum available.
                            <br>
                            <small class="text-muted">Today 4:21 pm</small>
                        </div>
                    </div>
                    <div class="feed-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body">
                            TIt is a long established fact that.
                            <br>
                            <small class="text-muted">Yesterday 2:45 pm</small>
                        </div>
                    </div>
                    <div class="feed-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a3.jpg">
                        </a>
                        <div class="media-body">
                            Many desktop publishing packages.
                            <br>
                            <small class="text-muted">Yesterday 1:10 pm</small>
                        </div>
                    </div>
                    <div class="feed-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a4.jpg">
                        </a>
                        <div class="media-body">
                            The generated Lorem Ipsum is therefore always free.
                            <br>
                            <small class="text-muted">Monday 8:37 pm</small>
                        </div>
                    </div>
                </div>
                <div class="m-t-md">
                    <h4>Statistics</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                    </p>
                    <div class="row m-t-sm">
                        <div class="col-md-6">
                            <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                            <h5><strong>169</strong> Posts</h5>
                        </div>
                        <div class="col-md-6">
                            <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                            <h5><strong>28</strong> Orders</h5>
                        </div>
                    </div>
                </div>
                <div class="m-t-md">
                    <h4>Discussion</h4>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge badge-primary">16</span>
                                General topic
                            </li>
                            <li class="list-group-item ">
                                <span class="badge badge-info">12</span>
                                The generated Lorem
                            </li>
                            <li class="list-group-item">
                                <span class="badge badge-warning">7</span>
                                There are many variations
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div>
                                    <span class="pull-right text-right">
                                        <small>Promedio mensual de visitas y usuarios registrados GICDT.A.C.<strong>Tuxtla Gutiérrez</strong></small>
                                        <br/>
                                        All sales: 162,862
                                    </span>
                                    <h1 class="m-b-xs">{{ $n=(count($users = User::all()));}}</h1>
                                    <h3 class="font-bold no-margins">
                                        USUARIOS
                                    </h3>
                                    <small>Sales marketing.</small>
                                </div>

                                <div>
                                    <canvas id="lineChart" height="70"></canvas>
                                </div>

                                <div class="m-t-md">
                                    <small class="pull-right">
                                        <i class="fa fa-clock-o"> </i>
                                        Update on 16.07.2015
                                    </small>
                                    <small>
                                       <strong>Analysis of sales:</strong> The value has been changed over time, and last month reached a level over $50,000.
                                   </small>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>


               <div class="row">

                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-primary pull-right">Monthly</span>
                            <h5>Visitantes</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{ $n=(count($users = User::all()));}}</h1>
                            <div class="stat-percent font-bold text-navy">20% <i class="fa fa-level-up"></i></div>
                            <small>New orders</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-info pull-right">Monthly</span>
                            <h5>Usuarios </h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{ $n=(count($users = User::all()));}}</h1>
                            <div class="stat-percent font-bold text-info">40% <i class="fa fa-level-up"></i></div>
                            <small>New orders</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-warning pull-right">Annual</span>
                            <h5>Cursos</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{ $n=(count($cursos = Curse::all()));}}</h1>
                            <div class="stat-percent font-bold text-warning">16% <i class="fa fa-level-up"></i></div>
                            <small>New orders</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>New data for the report</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content ibox-heading">
                            <h3>Stock price up
                                <div class="stat-percent text-navy">34% <i class="fa fa-level-up"></i></div>
                            </h3>
                            <small><i class="fa fa-stack-exchange"></i> New economic data from the previous quarter.</small>
                        </div>
                        <div class="ibox-content">
                            <div>

                                <div class="pull-right text-right">

                                    <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                    <br/>
                                    <small class="font-bold">$ 20 054.43</small>
                                </div>
                                <h4>NYS report new data!
                                    <br/>
                                    <small class="m-r"><a href="graph_flot.html"> Check the stock price! </a> </small>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Read below comments and tweets</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content no-padding">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                </li>
                                <li class="list-group-item">
                                    <p><a class="text-info" href="#">@Stock Man</a> Check this stock chart. This price is crazy! </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                                </li>
                                <li class="list-group-item">
                                    <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown printer took a galley </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                                </li>
                                <li class="list-group-item ">
                                    <p><a class="text-info" href="#">@Jonathan Febrick</a> The standard chunk of Lorem Ipsum</p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Timeline</h5>
                            <span class="label label-primary">Meeting today</span>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content inspinia-timeline">

                            <div class="timeline-item">
                                <div class="row">
                                    <div class="col-xs-3 date">
                                        <i class="fa fa-briefcase"></i>
                                        6:00 am
                                        <br/>
                                        <small class="text-navy">2 hour ago</small>
                                    </div>
                                    <div class="col-xs-7 content no-top-border">
                                        <p class="m-b-xs"><strong>Meeting</strong></p>

                                        <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row">
                                    <div class="col-xs-3 date">
                                        <i class="fa fa-file-text"></i>
                                        7:00 am
                                        <br/>
                                        <small class="text-navy">3 hour ago</small>
                                    </div>
                                    <div class="col-xs-7 content">
                                        <p class="m-b-xs"><strong>Send documents to Mike</strong></p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row">
                                    <div class="col-xs-3 date">
                                        <i class="fa fa-coffee"></i>
                                        8:00 am
                                        <br/>
                                    </div>
                                    <div class="col-xs-7 content">
                                        <p class="m-b-xs"><strong>Coffee Break</strong></p>
                                        <p>
                                            Go to shop and find some products.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row">
                                    <div class="col-xs-3 date">
                                        <i class="fa fa-phone"></i>
                                        11:00 am
                                        <br/>
                                        <small class="text-navy">21 hour ago</small>
                                    </div>
                                    <div class="col-xs-7 content">
                                        <p class="m-b-xs"><strong>Phone with Jeronimo</strong></p>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- begin olark code -->
            <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
                f[z]=function(){
                    (a.s=a.s||[]).push(arguments)};var a=f[z]._={
                    },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
                        f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
                            0:+new Date};a.P=function(u){
                                a.p[u]=new Date-a.p[0]};function s(){
                                    a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
                                        hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
                                            return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
                                                b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
                                                    b.contentWindow[g].open()}catch(w){
                                                        c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
                                                            var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
                                                                b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
                                                                    loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
                                                                /* custom configuration goes here (www.olark.com/documentation) */
                                                                olark.identify('7400-999-10-7461');/*]]>*/</script><noscript><a href="https://www.olark.com/site/7400-999-10-7461/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
                                                                <!-- end olark code -->
                                                                @section('container')
                                                                <div class="container content ">
                                                                    <div id="disqus_thread"></div>
                                                                </div>

                                                                @stop




                                                            </div>
                                                            <div class="footer">


                                                            </div>
                                                        </div>

                                                        <!-- Mainly scripts -->
                                                        {{HTML::script('js/jquery-2.1.1.js')}}
                                                        {{HTML::script('js/bootstrap.min.js')}}
                                                        {{HTML::script('js/plugins/metisMenu/jquery.metisMenu.js')}}
                                                        {{HTML::script('js/plugins/slimscroll/jquery.slimscroll.min.js')}}
                                                        <!-- Flot -->
                                                        {{HTML::script('js/plugins/flot/jquery.flot.js')}}
                                                        {{HTML::script('js/plugins/flot/jquery.flot.spline.js')}}
                                                        {{HTML::script('js/plugins/flot/jquery.flot.resize.js')}}
                                                        {{HTML::script('js/plugins/flot/jquery.flot.pie.js')}}
                                                        {{HTML::script('js/plugins/flot/jquery.flot.symbol.js')}}
                                                        {{HTML::script('js/plugins/flot/curvedLines.js')}}
                                                        <!-- Peity -->
                                                        {{HTML::script('js/plugins/peity/jquery.peity.min.js')}}
                                                        {{HTML::script('js/demo/peity-demo.js')}}
                                                        <!-- Custom and plugin javascript -->
                                                        {{HTML::script('js/inspinia.js')}}
                                                        {{HTML::script('js/plugins/pace/pace.min.js')}}
                                                        <!-- jQuery UI -->
                                                        {{HTML::script('js/plugins/jquery-ui/jquery-ui.min.js')}}
                                                        <!-- Jvectormap -->                  
                                                        {{HTML::script('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}
                                                        {{HTML::script('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}
                                                        <!-- Sparkline -->
                                                        {{HTML::script('js/plugins/sparkline/jquery.sparkline.min.js')}}
                                                        <!-- Sparkline demo data  -->
                                                        {{HTML::script('js/demo/sparkline-demo.js')}}
                                                        <!-- ChartJS-->
                                                        {{HTML::script('js/plugins/chartJs/Chart.min.js')}}
                                                        <script type="text/javascript" src="{{url()}}/plugins/fancybox/source/jquery.fancybox.pack.js"></script>




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

    <!-- Mirrored from webapplayers.com/inspinia_admin-v1.8/dashboard_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jan 2015 16:05:47 GMT -->
</body>
</html>

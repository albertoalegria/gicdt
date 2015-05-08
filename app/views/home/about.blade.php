@extends('layouts.master')
@section('container')
{{HTML::style('css/pages/portfolio-v1.css')}}
<div class="container">
    <div class="breadcrumbs">
    	<div class="container">
            <h1 class="pull-left">Nosotros</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">About</a></li>
                <li class="active">About Us</li>
            </ul>
        </div><!--/container-->
    </div>
    <div class="container content">		
    	<div class="row margin-bottom-40">
         <div class="col-md-6 md-margin-bottom-40">
             <p align="justify">Somos un Grupo de Investigación Científica y de Desarrollo Tecnológico. Satisfacemos las necesidades de la   sociedad aplicando la tecnología en la solución de problemas de la vida diaria.
                 Conformados por un grupo de personas emprendedoras comprometidas con la sociedad, aplicando nuestros conocimientos y desarrollando nuevas tecnologías, enfocadas a la solución de problemas y al bienestar de nuestra sociedad, incluso en el ámbito internacional.</p>
                 <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> Doctores</li>
                    <li><i class="fa fa-check color-green"></i> Ingenieros</li>
                    <li><i class="fa fa-check color-green"></i> Alumnos</li>
                    <li><i class="fa fa-check color-green"></i> Empresas</li>
                </ul><br>

                <!-- Blockquotes -->
                <blockquote class="hero-unify">
                    <p> Colaboran para así  impulsar  la investigación y desarrollo tecnológico, para tener un MEJOR PAÍS Y PLANETA DONDE VIVIR..</p>
                    <small>Director: Walter Torres</small>
                </blockquote>
            </div>

            <div class="col-md-6 md-margin-bottom-40">
                <div class="responsive-video">
                    <iframe src="http://player.vimeo.com/video/9679622" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> 
                </div>
            </div>
        </div><!--/row-->


        <div class="row margin-bottom-40">
            <div class="col-md-6 md-margin-bottom-40">
                <div class="headline"><h2>Misión</h2></div>
                <p align="justify"> Ofrecer la infraestructura humana, técnica y administrativa para la gente que tenga ideas, creatividad, experiencia, conocimientos o recursos encuentre un espacio de desarrollo donde pueda cultivar su dedicación al trabajo, a la sociedad, la naturaleza y la ciencia.</P>
                <div class="headline"><h2>Visión</h2></div>
                <p align="justify"> Ser el grupo, que con enfoques interdisciplinarios y multidisciplinarios de la ciencia y la tecnología, el conocimiento, la teoría de la educación, la incidencia en el desarrollo económico, y la vinculación con el sector productivo, respetando las condiciones sociales y centradas en el cuidado del medio ambiente, llevar al Estado de Chiapas y a México, a un mejor nivel de competitividad, consolidado en materia de Desarrollo Tecnológico e industrialización, que apoye la gestión administrativa y contribuya a la creación de Empresas Certificadas.</p>
                </div>
        </p></div></p></div></div></div>



        <!-- Meer Our Team -->
        <div class="headline"><h2>Directorio del GICDT</h2></div>
        <div class="row team">
            <div class="col-sm-3">
                <div class="thumbnail-style">
                    <img class="img-responsive" src="assets/img/team/1.jpg" alt="">
                    <h3><a>MC . Walter Torres Robledo</a> <small>Director General</small></h3>
                    <p> waltertorres@elgrupo.mx</p>
                    <ul class="list-unstyled list-inline team-socail">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                 </ul>
             </div>
         </div>
         <div class="col-sm-3">
            <div class="thumbnail-style">
                <img class="img-responsive" src="assets/img/team/3.jpg" alt="">
                <h3><a> Dr. Héctor Guerra Crespo</a> <small>Subdirector</small></h3>
                <p>hgcrespo@hotmail.com</p>
                <ul class="list-unstyled list-inline team-socail">
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
             </ul>
         </div>
     </div>
     <div class="col-sm-3">
        <div class="thumbnail-style">
            <img class="img-responsive" src="assets/img/team/2.jpg" alt="">
            <h3><a>M.C. Galdino Belizario Nango Solis.</a> <small>Integrante del GICDT</small></h3>
            <p>gbnango@hotmail.com</p>
            <ul class="list-unstyled list-inline team-socail">
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
         </ul>
     </div>
 </div>
 <div class="col-sm-3">
    <div class="thumbnail-style">
        <img class="img-responsive" src="assets/img/team/4.jpg" alt="">
        <h3><a>Ing. Miguel Arturo Vázquez Velázquez.</a> <small>Integrante del GICDT</small></h3>
        <p>mvazquez@ittg.edu.mx</p>
        <ul class="list-unstyled list-inline team-socail">
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
     </ul>
 </div>
</div>
</div><!--/team-->
<!-- End Meer Our Team -->


</div>
</div>
@stop
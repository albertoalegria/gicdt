
@extends('layouts.master')
@section('container')
<div class="container content">		
 <div class="row margin-bottom-30">
  <div class="col-md-9 mb-margin-bottom-30">



      <div class="headline"><h2>	
        CONTÁCTENOS</h2></div>
        <p></p><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3820.383644490701!2d-93.172152!3d16.757578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd97b5e826db5%3A0x54ad440fed658d18!2sTecnol%C3%B3gico+de+Tuxtla+Guti%C3%A9rrez!5e0!3m2!1ses-419!2smx!4v1416981312688" width="850" height="350" frameborder="0" style="border:0"></iframe>
        <form>
            <label>Nombre</label>
            <div class="row margin-bottom-20">
                <div class="col-md-7 col-md-offset-0">
                    <input type="text" class="form-control">
                </div>                
            </div>

            <label>Correo electronico <span class="color-red">*</span></label>
            <div class="row margin-bottom-20">
                <div class="col-md-7 col-md-offset-0">
                    <input type="text" class="form-control">
                </div>                
            </div>

            <label>Mensaje</label>
            <div class="row margin-bottom-20">
                <div class="col-md-11 col-md-offset-0">
                    <textarea rows="8" class="form-control"></textarea>
                </div>                
            </div>

            <p><button type="submit" class="btn-u">Enviar mensaje</button></p>
            {{Form::captcha() }}
            <div class="">

        </div><!--/col-md-9-->
 </div>
        <div class="col-md-3">
         <!-- Contacts -->
         <div class="headline"><h2>Contactanos</h2></div>
         <ul class="list-unstyled who margin-bottom-30">
            <li><a href="#"><i class="fa fa-home"></i>7 Oriente Sur 565-C. C.P.:29000.
                Tuxtla Gutiérrez, Chiapas.</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>waltertorres@elgrupo.mx</a></li>
                <li><a href="#"><i class="fa fa-phone"></i>044 961 112 1331</a></li>
                <li><a href="#"><i class="fa fa-globe"></i>http://www.gicdt.mx</a></li>
            </ul>

        </div> 
         </div> 

            <!-- Why we are? -->
        </div>    <!--/col-md-3-->
    </div><!--/row-->        

    <!-- Our Clients -->
    <div id="clients-flexslider" class="flexslider home clients">
        <div class="headline"><h2>Our Clients</h2></div>    

        <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 3400%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-253.333333333333px, 0px, 0px);">
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/hp_grey.png" alt=""> 
                    <img src="assets/img/clients/hp.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/igneus_grey.png" alt=""> 
                    <img src="assets/img/clients/igneus.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/vadafone_grey.png" alt=""> 
                    <img src="assets/img/clients/vadafone.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/walmart_grey.png" alt=""> 
                    <img src="assets/img/clients/walmart.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/shell_grey.png" alt=""> 
                    <img src="assets/img/clients/shell.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/natural_grey.png" alt=""> 
                    <img src="assets/img/clients/natural.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/aztec_grey.png" alt=""> 
                    <img src="assets/img/clients/aztec.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/gamescast_grey.png" alt=""> 
                    <img src="assets/img/clients/gamescast.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/cisco_grey.png" alt=""> 
                    <img src="assets/img/clients/cisco.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/everyday_grey.png" alt=""> 
                    <img src="assets/img/clients/everyday.png" class="color-img" alt="">
                </a>
            </li>
            <li style="width: 125.666666666667px; float: left; display: block;">
                <a href="#">
                    <img src="assets/img/clients/cocacola_grey.png" alt=""> 
                    <img src="assets/img/clients/cocacola.png" class="color-img" alt="">
                </a>
            </li>
            
        </ul></div>


    </div><!--/flexslider-->
    <!-- End Our Clients -->
</div>

</div>


</form>

@stop
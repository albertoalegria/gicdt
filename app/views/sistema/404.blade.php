@extends('layouts.master')
@section('container')
<div class="container content">     
        <!--Error Block-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v1">
                    <span class="error-v1-title">404</span>
                    <span>Esto es un Error!</span>
                    <p>La URL solicitada no se encuentra en este servidor . Eso es todo lo que sabemos</p>
                    <a class="btn-u btn-bordered" href="{{url()}}">Regresar al Inicio</a>
                </div>
            </div>
        </div>
        <!--End Error Block-->
    </div>
    {{HTML::style('css/pages/page_404_error.css')}}
@stop
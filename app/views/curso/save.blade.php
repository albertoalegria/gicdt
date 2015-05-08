    @extends('layouts.sistema')

  @section('container')
  {{ HTML::style('css/bootstrap-tagsinput.css')}}
  {{ HTML::style('css/redactor.css')}}
  {{ HTML::script('js/redactor.js') }}   
  {{ HTML::script('js/bootstrap-tagsinput.js') }}  
  <div class="breadcrumbs">
    <div class="container">
      <h1 class="pull-left">Registro de Cursos</h1>
      <ul class="pull-right breadcrumb">
        <li>{{HTML::link('sistema','Sistema')}}</li>
        <li>{{HTML::link('curso','Cursos')}}</li>
        <li class="active">Registro</li>
      </ul>
    </div>
  </div>
  <div class='container content'>
    <h3>Llena el formulario para Agregar curso</h3>  
    {{Form::open(array('url'=>'curso/agregar','enctype'=>'multipart/form-data'))}}
    @foreach ($curso as $k)


    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

    </div>
    <div class="row">
      <div class="col-md-4 col-lg-4">
        {{Form::label('nombre','Nombre del Curso')}}
        {{Form::text('nombre',null,array('class'=>'form-control','placeholder'=>'Introduce el titulo del curso'))}}
      </div>
      <div class="col-md-4 col-lg-4">
        {{Form::label('tipo','Tipo de Curso')}}
        <select name="tipo" id="tipoCurso" required="" class="form-control">
          <option selected="" disabled="" value="" >(Seleccionar)</option>
          <optgroup  label="Cursos ">
            <option value="Curso" >Curso</option>
            <option value="Diplomado" >Diplomado</option>
            <option value="Capacitación laboral" >Capacitación laboral</option>
            <option value="Evento" >Evento</option>
          </optgroup>
        </select>

      </div>  
      <div class="col-md-4 col-lg-4">
        {{Form::label('tipotitulo','Tipo de Titulo (opcional)')}}
        <select  name="tipotitulo" class="form-control" >
          <option value="ninguno">Ninguno</option>
          <option value="asistencia">Certificado de asistencia</option>
          <option value="curricular">Título estatal con validez oficial o valor curricular</option>
        </select>
      </div>
      <div class="col-md-4 col-lg-4">
        {{Form::label('precio','Precio del Curso')}}
        {{Form::text('precio',0,array('class'=>'form-control','placeholder'=>'Introduce el precio $',))}}

      </div>

      <div class="col-md-4 col-lg-4">
        {{Form::label('cupo','Lugares Disponibles')}}
        {{Form::number('cupo',null,array('class'=>'form-control','placeholder'=>'Introduce el numero de asistentes máximo'))}}

      </div>
      <div class="col-md-4 col-lg-4">
        {{Form::label('keywords','Palabras Claves')}}
        {{Form::text('keywords','laravel,css,js',array('class'=>'form-control','placeholder'=>'Introduce  las palabras claves','data-role'=>'tagsinput'))}}

      </div>

      <div class="col-lg-4">
        {{Form::label('temario',' Temario del curso ')}}
        {{Form::file('temario')}}
        {{Form::label('image','Poster del Curso')}}
        {{Form::file('image')}}

      </div>
      <div class="col-lg-8">

        {{Form::label('desc',' Descripción del curso')}}
        {{Form::textarea('desc',null,array('class'=>'form-control','placeholder'=>'Introduce la descripción del Curso','rows'=>'4'))}}

      </div>
      <div class="col-lg-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15281.314610864862!2d-93.10446715!3d16.76031675772755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1415654222024" width="100%" height="250" frameborder="0" style="border:0"></iframe>
      </div>
      <div class="col-lg-8">
        {{Form::label('ubicacion','Dirección del Curso')}}
        {{Form::textarea('ubicacion',null,array('class'=>'form-control','placeholder'=>'Ejemplo: Intituto tecnológico de Tuxtla Gutierrez, Edificio de Sistemas Sala COM-1','rows'=>'4'))}}
        <div id="contenedor">
          <hr>
          <h2 class="text-center">Fechas del Curso </h2>

          <div class="form-group col-lg-4" >




            <div class="input-group date "  id="fecha">
              <input type="text" name="fechas[]" value="" class="form-control">
              <span class='input-group-addon'><span class='glyphicon-calendar glyphicon'></span></span>
            </div>

            <a id="agregar"> <i class='fa fa-plus'></i>Agregar Fechas </a>
          </div>
        </div>  
      </div>
      <div class="col-lg-8"></div>
      <div class="col-lg-4">
        <button class="btn-u btn-u-dark-blue" type="submit"><i class="fa fa-save"></i> Guardar Curso</button>
      </div>
      @endforeach 
    </div>
    {{Form::close()}}
  </div>



  <script>
    var i=0;
    function eliminar(arg){
      $("#f_"+arg).remove();
    }
    $(document).ready(function() {
      $("#desc").redactor();
      $("#ubicacion").redactor();
      $("#fecha").datetimepicker();
      $("#agregar").click(function(){
       $("#contenedor").append(' <div class="form-group col-lg-4" id="f_'+i+'">'+
        ' <div class="input-group date" id="d_'+i+'"  >'+
        ' <input type="text" class="form-control" name="fechas[]">'+
        '<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span>'+
        '</span>    </div> <a onclick="eliminar('+i+')"><i class="fa fa-trash-o"></i>eliminar</a></div>');
       $('#d_'+i).datetimepicker();
       i++;
     }

     );
    });

  </script>


  @stop
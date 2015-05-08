@extends('layouts.sistema')
@section('container')
{{HTML::style('css/pages/portfolio-v1.css')}}
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Mis Cursos </h1>
		<ul class="pull-right breadcrumb">
			<li>{{HTML::link('sistema','Sistema')}}</li>
			<li>{{HTML::link('curso','Cursos')}}</li>
			<li class="active">MisCursos</li>
		</ul>
	</div>
</div>
<div class="container content">
  <div class="panel panel-grey margin-bottom-40">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-globe"></i> Mis Cursos</h3>
    </div>
    <div class="panel-body"></div>
    <table class =  " table DataTable table-bordered table-striped" >
          
            <thead>

                <tr>
                    <th>Nombre</th>
                    <th class="hidden-sm">Descripcion</th>
                    <th>Fecha</th>
                    <th>Status</th>
                    <th>Lugar</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($curso as $k)
              <tr>
                <td>{{$k->nombre}}</td>
                <td>{{ substr($k["descr"],0,350); }}</td>
                <td class="hidden-sm">{{$k->fechas}}</td>
                <td>{{$k->status}}</td>
                <td>


                   <a href='{{url("curso/delete/$k->id")}}' class="btn btn-danger btn-xs" ><i class="fa fa-trash-o">  </i> Eliminar</a>



                   <a href='{{url("curso/view/$k->id")}} ' class="btn btn-success btn-xs"><i class="fa fa-check" >  </i>Ver</a>


                   <a href='{{url("curso/edit/$k->id")}} ' class="btn btn-success btn-xs"><i class="fa fa-pencil" >  </i> Editar</a>

               </td>
           </tr>
           @endforeach     

       </tbody>
   </table>
</div>                      
</div>
</div>
</div>

</div>
<div class="modal fade delete-user-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Eliminar curso</h4>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro que deseas eliminar este curso? <strong></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                &nbsp;

            </div>
        </div>
    </div>
</div>


@stop
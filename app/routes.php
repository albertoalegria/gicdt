<?php
Route::get('/', function()
{
	return View::make('hello');
});
//Login
Route::get('user',function(){
	if(Auth::check())
		return Redirect::to('sistema');
	else return View::make('user.index');
});
Route::get('user/logout', 'Usuarios@logout');
Route::post('user','Usuarios@index');
//Registro
Route::get('user/registro',function(){
	return View::make('user.registro');
});
Route::post('user/registro','Usuarios@create');
//Activar
Route::get('user/activar/{correo}/{key}','Usuarios@activar');
Route::get('user/reset', 'RemindersController@getRemind');
Route::post('user/resetpassword', 'RemindersController@postRemind');
Route::get('user/resetpassfinal/{token}/', 'RemindersController@getReset');

Route::post('user/resetpassfinal', 'RemindersController@postReset');

Route::group(array('before' => 'auth'), function()
{

	Route::get('cvu/Me','Usuarios@editme');
	Route::post('cvu/Me','Usuarios@editmeSave');

	Route::get('sistema', 'Sistema@index');
	Route::get('sistema/cvu', 'CVU@index');

#-------------Admin

Route::get('admin/admin', 'cursos@admin');
Route::get('curso/val/{id}','cursos@activar');
Route::get('curso/des/{id}','cursos@desactivar');
#-------------Reportes Tecnicos
	Route::get("ReportTech", 'ReportsTech@index');
#Agregar 
	Route::get("ReportTech/add",'ReportsTech@create');
	Route::post("ReportTech/add", 'ReportsTech@store');
#Editar
	Route::get("ReportTech/edit/{id}",'ReportsTech@edit');
	Route::post("ReportTech/edit/{id}", 'ReportsTech@update');
// ReportTech/delete/
#visualizar
	Route::get("ReportTech/show/{id}",'ReportsTech@show');

#Eliminar 

	Route::get("ReportTech/delete/{id}",'ReportsTech@destroy');


#-------------


#-------------Identidad
	Route::get("Identidad", 'Identidad@index');
	Route::get("Identidad/list", 'Identidad@listar');
	
#Agregar 
	Route::get("Identidad/add",'Identidad@create');
	Route::post("Identidad/add", 'Identidad@store');
#Editar
	Route::get("Identidad/edit/{id}",'Identidad@edit');
	Route::post("Identidad/edit/{id}", 'Identidad@update');
#update
	Route::post('Identidad/update','Identidad@updateinfo');
#visualizar
	Route::get("Identidad/show/{id}",'Identidad@show');

#Eliminar 

	Route::get("Identidad/delete/{id}",'Identidad@destroy');

#-----------Cursos-------------
		
	Route::get('curso/search', 'cursos@postbuscar');
	Route::get('curso/search', 'cursos@search');

	Route::get('curso/agregar', function()
	{	
		return View::make('curso.agregar_curso');
	});
	Route::post('curso/agregar','cursos@index');
	Route::get('curso/all', 'cursos@all');
	Route::get('curso/view/{id}','cursos@show');
	Route::get('curso/delete/{id}','cursos@destroy');
	Route::get('curso/edit/{id}','cursos@edit');
	Route::post('curso/update/{id}','cursos@update');
	Route::get('curso/miscursos', 'cursos@MyCurse');
	Route::get('curso/registro/{id}', 'cursos@registro');
	Route::get('curso/welcome/{id}', 'cursos@guardar');
	Route::get('curso/registrado/', 'cursos@mensaje');
	Route::get('facebook/update','Usuarios@updateface');
});
Route::get('about', 'HomeController@about');
Route::get('info', 'info@index');
Route::get('help', 'help@index');
Route::get('contacto', 'HomeController@contacto');
Route::get('descargas', 'HomeController@contacto');
App::missing(function(){

	return View::make('sistema.404');
});

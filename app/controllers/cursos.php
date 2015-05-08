<?php

class cursos extends \BaseController {

	 	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 	public function index(){
	 		if(Auth::guest())
	 			return Redirect::to('user');
	 		$rules = array(
			'nombre'            => 'required', 	// required and must be unique in the ducks table
			'tipo'=>'required',
			'tipotitulo'=>'required',
			'precio'=>'required|numeric',
			'cupo'=>'required|integer',
			'keywords'=>'required',
			'image' => 'mimes:jpeg,bmp,png|required',
			'temario' => 'mimes:pdf,doc,docx,txt',
			'desc'=>'required',
			'ubicacion'=>'required'
			);
	 		$validator = Validator::make(Input::all(), $rules);
	 		if ($validator->fails())
	 		{
	 			return Redirect::to('curso/agregar')
	 			->withErrors($validator);
	 		}else{
	 			$temario="";
	 			if(Input::hasFile('temario')) {
	 				$temario=str_random(10).'_'.Input::file("temario")->getClientOriginalName();
	 				Input::file('temario')
	 				->move('cursos/temarios/',$temario);

	 				$image="";
	 				if(Input::hasFile('image')) {
	 					$image=str_random(10).'_'.Input::file("image")->getClientOriginalName();
	 					Input::file('image')
	 					->move('cursos/portadas/',$image);
	 				}
			// dd(Auth::user());

	 				$crs= new curse();
	 				$crs->nombre=Input::get('nombre');
	 				$crs->lugar=Input::get('ubicacion');
	 				$crs->descr=Input::get('desc');
	 				$crs->fechas=implode(',',Input::get('fechas'));
	 				$crs->fecha_registro=date('Y-m-d');
	 				$crs->id_user=Auth::user()->id;
	 				$crs->cupo=Input::get('cupo');
	 				$crs->tipo=Input::get('tipo');
	 				$crs->nombramiento=Input::get('tipotitulo');
	 				$crs->couta=Input::get('precio');
	 				$crs->keywords=Input::get('keywords');
	 				$crs->logo="$image";
	 				$crs->temario="$temario";
	 				$crs->save();

	 			}
	 		}

	 	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	
	public function store()
	{
		//
	}


	public function all()
	{
		$crs=curse::all();
		$data['cursos']=$crs;
		return View::Make('curso.all',$data);
	}
	

	public function show($id)
	{
		$count = usercurso::where('id_curso', '=', $id)->count();
		$crs = curse::find($id);
		if($crs==NULL){
			return View::Make('curso.fail');
		}
		else{

			$usr = User::find($crs->id_user);
			$data['k']=$crs; 
			$data['count']=$count;
			$data['usr']=$usr;
			return View::Make('curso.index',$data);
		}

	}

	public function MyCurse() {        
		$id=Auth::user()->id;
		$curso = curse::where('id_user', '=', $id)->get();
		$data['curso']=$curso;
		return View::Make('curso.miscursos',$data);

	}


	
	public function edit($id)
	{
		$crs = curse::find($id);
		if($crs->id_user ==Auth::user()->id)
			if($crs==NULL){
				return View::Make('curso.fail');
			}    
			else{


				$data['k']=$crs;
				$data['id']=$id;

				return View::Make('curso.edit',$data);
			}

		}
		public function update($id)
		{
			$id_user=Auth::user()->id;
			$cr=curse::whereRaw('id= ? and id_user = ?',array($id,$id_user))->get();
			$crs=NULL;
			foreach ($cr as $k) {
				$crs=$k;
			}			
			if($crs==NULL){

			}
			else{
				$temario=$crs->temario;
				if(Input::hasFile('temario')) {
					$temario=str_replace(' ', '_', str_random(10).'_'.Input::file("temario")->getClientOriginalName());
					Input::file('temario')
					->move('cursos/temarios/',$temario);
				}
				$image=$crs->logo;
				if(Input::hasFile('image')) {
					$image=str_replace(' ', '_', str_random(10).'_'.Input::file("image")->getClientOriginalName());
					Input::file('image')
					->move('cursos/portadas/',$image);
				}

				$crs->nombre=Input::get('nombre');
				$crs->lugar=Input::get('ubicacion');
				$crs->descr=Input::get('desc');
				$crs->fechas=implode(',',Input::get('fechas'));
				$crs->fecha_registro=date('Y-m-d');
				$crs->id_user=Auth::user()->id;
				$crs->cupo=Input::get('cupo');
				$crs->tipo=Input::get('tipo');
				$crs->nombramiento=Input::get('tipotitulo');
				$crs->couta=Input::get('precio');
				$crs->keywords=Input::get('keywords');
				$crs->logo="$image";
				$crs->temario="$temario";			
				$crs->update();

			}

}	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
public function destroy($id)
{
	
	$crs = curse::find($id);
	$usr = User::find($crs->id_user);

	if($id==0){
		
		return ('Necesita permisos del administrador ');

	}
	else
	{
		

		DB::delete('delete from cursos where id = '.$id);
	}  


}




public function registro($id)
{
	$crs = curse::find($id);
	if($crs==NULL){
		return View::Make('curso.fail');
	}
	else{

		$usr = User::find($crs->id_user);
		$data['k']=$crs; 

		$data['usr']=$usr;

		return View::make('curso.registro',$data);


	}

}

public function guardar($id)
{


	$id_usr=Auth::user()->id;
	$curso_ = curse::find($id);

	$crs = savecurso::whereRaw (' id_curso = ?  and  id_usuario = ?', array($id ,$id_usr))->count();


		// dd($crs);
	if($crs==0){
		$crs= new savecurso();
		$data['k']=$curso_; 	
		$crs->id_curso=$id;
		$crs->fecha_registro=date('Y-m-d');
		$crs->id_usuario=$id_usr;
		$crs->save();

		return View::make('curso.welcome',$data);
	}
	else{
		return View::make('curso/messages/registrado');

	}



}

public function admin()

{
	$crs=curse::all();
	$data['cursos']=$crs;
	return View::Make('admin.admin',$data);
}

public function mensaje(){


}

public function activar($id){

	$crs = curse::find($id);

	if($crs->status == "0"){
		$crs->status = "1";
	}
	
	else
	{
		$crs->status="0";
	}		


	$crs->save();

	return Redirect::to('admin/admin');
}

public function search()
{
	$conn = DB::connection("mysql");


	if (isset($_GET["buscar"])) {

		$buscar=htmlspecialchars(Input::get("buscar"));
		$paginacion=$conn
		->table("cursos")
		->where("nombre","LIKE",'%'.$buscar.'%')
		->orwhere("descr","LIKE",'%'.$buscar.'%')
		->orwhere("keywords","LIKE",'%'.$buscar.'%')
		->paginate(2);

	}

	else
	{

$paginacion=$conn->table("cursos")->paginate(2);

	}	

	return View::Make('curso.search',array("paginacion"=>$paginacion));

}

public function postbuscar(){


}

}

<?php

class Identidad extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['pais']=DB::table('pais')->get();
		$data['estado']=DB::table('estados')->get();
		$id_user=Auth::user()->id;
		$idnty=IdentityModel::find($id_user);
		if($idnty==NULL)$idnty=new IdentityModel();
		$data['identidad']=$idnty;
		return View::make('cvu.identity.index',$data);

	}
	public function updateinfo()
	{
		$rules=array(
			'fecha'=>'required',
			'nacion'=>'required',
			'sexo'=>'required',
			'pais'=>'required',
			'state'=>'required',

			);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('Identidad')->withInput()->withErrors($validator);

		}else{
			$id_user=Auth::user()->id;
			$idnty=IdentityModel::find($id_user);
			if($idnty==NULL){
				$idnty=new IdentityModel();

				$idnty->fec_nac=Input::get('fecha');
				$idnty->nacionalidad=Input::get('nacion');
				$idnty->sexo=Input::get('sexo');
				$idnty->id_pais=Input::get('pais');
				$idnty->estado_nacimiento=Input::get('state');
				$idnty->id_user=$id_user;
				$idnty->save();
			}else{

				$idnty->fec_nac=Input::get('fecha');
				$idnty->nacionalidad=Input::get('nacion');
				$idnty->sexo=Input::get('sexo');
				$idnty->id_pais=Input::get('pais');
				$idnty->estado_nacimiento=Input::get('state');
				$idnty->id_user=$id_user;
				$idnty->save();
			}
			return Redirect::to('Identidad');


		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function listar()
	{
		$id_user=Auth::user()->id;
		$datas['docs']=DB::select('select A.*, B.nombre as pais from doc_identidad as A,pais as B where A.id_usr=? and A.id_pais=B.id  ;',array($id_user));
		return View::make('cvu.identity.list',$datas);
		# code...
	}
	public function create()
	{
		$datas['pais']=DB::table('pais')->get();
		return View::make('cvu.identity.add',$datas);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			'pais'=>'required|integer',
			'desc'=>'required',
			'clave'=>'required'			);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('Identidad/add')->withInput()->withErrors($validator);

		}else{
			$id_usr=Auth::user()->id;
			$dc=new DocIdentity();
			$dc->id_pais=Input::get('pais');
			$dc->descripcion=Input::get('desc');
			$dc->clave_doc=Input::get('clave');
			$dc->id_usr=$id_usr;
			$dc->doc_principal=(Input::get('docprin'))=="on"?true:false;
			$dc->save();
			
			return Redirect::to('Identidad/list');

		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('cvu.identity.view');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('cvu.identity.modify');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$id_user=Auth::user()->id;
		$report = DocIdentity::whereRaw (' id = ? and id_usr = ?', array($id,$id_user))->get();
		foreach ($report as $k) {
			$k->delete();
		}	

		return Redirect::to('Identidad/list');
	}


}

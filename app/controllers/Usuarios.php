<?php

class Usuarios extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		
		$rules = array(
			'correo'            => 'required|email', 	// required and must be unique in the ducks table
			'password'=>'required'
			);
		$messages = array(
			'required' => 'El :attribute  es requerido ',
			'email' 	=> 'El campo  :attribute  debe contener una direccion validada');
		$validator = Validator::make(Input::all(), $rules,$messages);
		if ($validator->fails())
		{
			return Redirect::to('user')
			->withErrors($validator);
		}else{
			$recor=Input::get('recordar');
			$correo=Input::get('correo');
			$password=Input::get('password');
			$data=array('email'=>$correo,'password'=>$password,'status'=>'1');
			if (Auth::attempt($data))
			{
				return Redirect::intended('sistema');

			}else{

				return View::Make('user.index',['info'=>'El usuario y contraseña no coinciden o no tiene acceso intente de nuevo']);
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
		$rules = array(
			'email'            => 'required|email|unique:usuario', 	// required and must be unique in the ducks table
			'nombre'            => 'required',
			'appat'            => 'required',
			'password'            => 'required',
			'rpassword'=>'required'
			);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('user/registro')
			->withErrors($validator);
		}else{
			$usr=new User();
			$usr->email=Input::get('email');
			$usr->nombre=Input::get('nombre');
			$usr->ap_pat=Input::get('appat');
			$usr->ap_mat=Input::get('apmat');
			$usr->token_=str_random(99);
			$usr->password= Hash::make(Input::get('password'));
			$usr->save();
			$data['nombre']=$usr->nombre;
			$data['apellidos']=$usr->ap_pat.' '.$usr->ap_mat;
			
			$data['correo']=$usr->email;
			$data['ruta']=$usr->token_;
			Mail::send('user.send',$data, function($message)
			{
				$message->to('mane.spak@gmail.com','Equipo de Desarrollo del GICDT')->subject('Confirmacion de Registro')->cc(Input::get('email'));
			});
			return View::make('user.registro_confirm',$data);
		}
	}
	public function activar($correo,$key)
	{
		$records=User::where("email",'=',$correo)->get();
		$i=0;
		foreach ($records as $k) {
			if($k->token_==$key){
				$k->status="1";
				//$k->token_=str_random(80);
				$k->save();
				$i=1;
			}
		}
		if($i>0){

			return View::Make('user.sucess_activation');
		}else{

			return View::Make('user.activate_error');
		}


	}

	public function store()
	{
		//
	}

	public function show($id)
	{
		//
	}


	public function editme()
	{
		$id=Auth::user()->id;
		$data['user']=USer::find($id);
		return View::make('cvu.infopersonal.update',$data);
	}
	public function updateface()
	{
		
	}
	public function editmeSave()
	{
		$rules = array(
			'nombre'            => 'required',
			'appat'            => 'required',
			'cel'=>'required'

			);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}else{

			$id=Auth::user()->id;
			$usr=USer::find($id);
			$image=$usr->img;
			if(Input::hasFile('image')) {
				if(($image!=='default.png'))File::delete(public_path().'/img/users/'.$image);

				$image=$id.str_random(10).'_.'.Input::file("image")->guessClientExtension();
				Input::file('image')
				->move('img/users/',$image);

			}

			$usr->nombre=Input::get('nombre');
			$usr->ap_pat=Input::get('appat');
			$usr->ap_mat=Input::get('apmat');
			$usr->telefono=Input::get('cel');
			$usr->estado_civil=Input::get('estado_civl');
			$usr->cp=Input::get('cp');
			$usr->img=$image;
			$usr->save();
			return Redirect::to('sistema/cvu');

		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
	public function logout()
	{
		Auth::logout();
		return Redirect::to('user')->with('info', 'Usuario No Logueado');
	}

	public function destroy($id)
	{
		//
	}


}

<?php

class ReportsTech extends HomeController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$id=Auth::user()->id;
		$data['rp']= reporttec::where('id_user', '=', $id)->get();
		return View::make('cvu.reporttech.list',$data);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cvu.reporttech.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			'title'=>'required',
			'instancia'=>'required',
			'objetivo'=>'required',
			'desc'=>'required',
			'fecha'=>'required',
			'autores'=>'required',
			'keywords'=>'required',
			'page'=>'required',
			'image' => 'mimes:jpeg,bmp,png|required',
			'file_'=>'required|mimes:pdf,doc,docx,txt'
			);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('ReportTech/add')->withInput()->withErrors($validator);

		}else{
			$report=new reporttec();
			$report->titulo=Input::get('title');
			$report->instancia=Input::get('instancia');
			$report->objetivo=Input::get('objetivo');
			$report->descripcion=Input::get('desc');
			$report->autores=Input::get('autores');
			$report->keywords=Input::get('keywords');
			$report->no_pagina=Input::get('page', 0);
			$id_user=Auth::user()->id;
			$file_="";
			if(Input::hasFile('file_')) {
				$file_=$id_user.str_random(10).'_'.Input::file("file_")->getClientOriginalName();
				Input::file('file_')
				->move('otros/reportes/',$file_);
			}
			$image="";
			if(Input::hasFile('image')) {
				$image=str_random(10).'_'.Input::file("image")->getClientOriginalName();
				Input::file('image')
				->move('otros/reportes/',$image);
			}
			$report->id_user=$id_user;
			$report->file=$file_;
			$report->img=$image;
			$report->fecha=Input::get('fecha');
			$report->titulo=Input::get('title');
			$report->save();
			return Redirect::to('ReportTech');

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
		$data['report'] = reporttec::find($id);

		return View::make('cvu.reporttech.index',$data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['report'] = $f=reporttec::find($id);
		$id_user=Auth::user()->id;
		if($f->id_user==$id_user)
			return View::make('cvu.reporttech.modify',$data);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules=array(
			'title'=>'required',
			'instancia'=>'required',
			'objetivo'=>'required',
			'desc'=>'required',
			'fecha'=>'required',
			'autores'=>'required',
			'keywords'=>'required',
			'page'=>'required',
			'image' => 'mimes:jpeg,bmp,png',
			'file_'=>'mimes:pdf,doc,docx,txt'
			);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);


		}else{
			$report=reporttec::find($id);
			$report->titulo=Input::get('title');
			$report->instancia=Input::get('instancia');
			$report->objetivo=Input::get('objetivo');
			$report->descripcion=Input::get('desc');
			$report->autores=Input::get('autores');
			$report->keywords=Input::get('keywords');
			$report->no_pagina=Input::get('page', 0);
			$id_user=Auth::user()->id;
			$file_=$report->file;
			if(Input::hasFile('file_')) {
				$file_=$id_user.str_random(10).'_'.Input::file("file_")->getClientOriginalName();
				Input::file('file_')
				->move('otros/reportes/',$file_);
			}
			$image=$report->img;
			if(Input::hasFile('image')) {
				$image=str_random(10).'_'.Input::file("image")->getClientOriginalName();
				Input::file('image')
				->move('otros/reportes/',$image);
			}
			$report->id_user=$id_user;
			$report->file=$file_;
			$report->img=$image;
			$report->fecha=Input::get('fecha');
			$report->titulo=Input::get('title');
			$report->save();
			return Redirect::to('ReportTech');

		}
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
		$report = reporttec::whereRaw (' id = ? and id_user = ?', array($id,$id_user))->get();
		foreach ($report as $k) {
			$k->delete();
		}	

		return Redirect::to('ReportTech');
	}


}

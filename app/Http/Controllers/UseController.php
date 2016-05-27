<?php

namespace App\Http\Controllers;
use DB;
use File;
use Illuminate\Http\Request;

class UseController extends Controller {

	public function __construct()
	{
	}

	public function welcome(){

		$tema = DB::table('muestra_tematica')->get();

		$tematica = array();
		$i=0;

		foreach ($tema as $key => $value) {
			$tematica[$i] = $value->tematica;
			$i++;
		}

		return view('welcome')->with('tematica', $tematica);
	}

	public function save(Request $request){

		$this->validate($request, [

			'institucion' => 'required',
			'pais' => 'required',
			'direccion' => 'required',
			'representante' => 'required',
			'cargo' => 'required',
			'tel' => 'required|numeric',
			'correo' => 'required|email|unique:users',
			'produccion' => 'required',
			'productor' => 'required',
			'tematica' => 'required',
			'sinopsis' => 'required',
			'url' => 'required',
			'file1' => 'mimes:jpeg,bmp,png',
			'file2' => 'mimes:jpeg,bmp,png',
			'file3' => 'mimes:jpeg,bmp,png',
			'condiciones' => 'required|accepted'


		]);

		$file = $request->file('file1');
		$nombre = $file->getClientOriginalName();

		#$id_user= '245sd';

		#\Storage::MakeDirectory($id_user);

		\Storage::disk('local')->put($nombre, File::get($file));

		//indicamos que queremos guardar un nuevo archivo en el disco local


		return $this->welcome();

	}

}

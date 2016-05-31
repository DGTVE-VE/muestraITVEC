<?php

namespace App\Http\Controllers;
use DB;
use File;
use App\Http\Requests;
use Illuminate\Http\Request;

class UseController extends Controller {

	public function __construct()
	{
		  $this->middleware('auth');
	}

	public function welcome(){

		return view('welcome');
	}

	public function registro(){

		$tema = DB::table('muestra_tematica')->get();

		$tematica = array();
		$i=0;

		foreach ($tema as $key => $value) {
			$tematica[$i] = $value->tematica;
			$i++;
		}

			return view('viewMuestra.registroMuestra')->with('tematica', $tematica);
	}

public function save(Request $request){

		$this->validate($request, [

			'institucion' => 'required|max:500',
			'pais' => 'required|max:45',
			'direccion' => 'required',
			'representante' => 'required|max:150',
			'cargo' => 'required|max:250',
			'tel' => 'required|max:20',
			'correo' => 'required|email|max:200',
			'produccion' => 'required|max:500',
			'productor' => 'required|max:150',
			'tematica' => 'required',
			'sinopsis' => 'required',
			'url' => 'required',
			'file1' => 'mimes:jpeg,bmp,png',
			'file2' => 'mimes:jpeg,bmp,png',
			'file3' => 'mimes:jpeg,bmp,png',
			'condiciones' => 'required|accepted'


		]);

		$institucion = $request->input('institucion');
		$pais = $request->input('pais');
		$direccion = $request->input('direccion');
		$representante = $request->input('representante');
		$cargo = $request->input('cargo');
		$tel = $request->input('tel');
		$correo = $request->input('correo');
		$produccion = $request->input('produccion');
		$productor = $request->input('productor');
		$tematica = $request->input('tematica')+1;
		$sinopsis = $request->input('sinopsis');
		$file1 = $request->file('file1');
		$file2 = $request->file('file2');
		$file3 = $request->file('file3');
		$url = $request->input('url');

		$id = DB::table('muestra_registro')->insertGetId(
    [
			'institucion' => $institucion,
			'pais' => $pais,
			'domicilio' => $direccion,
			'nombre' => $representante,
			'cargo' => $cargo,
			'telefono' => $tel,
			'correo' => $correo,
			'nombre_produccion' => $produccion,
			'nombre_productor' => $productor,
			'id_tematica' => $tematica,
			'sinopsis' => $sinopsis,
			'url' => $url,

			]
		);

		\Storage::MakeDirectory($institucion.'_'.$id);

		$img1 = $file1->getClientOriginalName();
		\Storage::disk('local')->put($institucion.'_'.$id.'/'.'img1.jpg', File::get($file1));

		$img2 = $file2->getClientOriginalName();
		\Storage::disk('local')->put($institucion.'_'.$id.'/'.'img2.jpg', File::get($file2));

		$img3 = $file3->getClientOriginalName();
		\Storage::disk('local')->put($institucion.'_'.$id.'/'.'img3.jpg', File::get($file3));


		return $this->welcome();

	}

}

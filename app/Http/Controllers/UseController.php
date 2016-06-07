<?php

namespace App\Http\Controllers;
use DB;
use File;
use Mail;
use Session;
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
		$email = \Auth::user() -> email;

		$tema = DB::table('edu_clasificaciones')->get();

		$tematica = array();
		$i=0;

		foreach ($tema as $key => $value) {
			$tematica[$i] = $value->clasifica;
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
			'file1' => 'required|mimes:jpeg',
			'file2' => 'required|mimes:jpeg',
			'file3' => 'required|mimes:jpeg',
			'condiciones' => 'required|accepted',
			

			// 'file2' => 'mimes:jpeg,bmp,png',
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
			'clasifica_id' => $tematica,
			'sinopsis' => $sinopsis,
			'url' => $url,
			]
		);

		$idSerie = DB::table('edu_serie')->insertGetId([

			'titulo_serie' => $produccion,
			'temporadas_total' => '1',
			'categoria_id' => '2',
			'clasificacion_id' => $tematica,
			'descripcion' => $sinopsis,

		]);

		\Storage::MakeDirectory($idSerie);

		$img1 = $file1->getClientOriginalName();
		$route1 = \Storage::disk('local')->put($idSerie.'/'.'banner.jpg', File::get($file1));

		$img2 = $file2->getClientOriginalName();
		$route2 = \Storage::disk('local')->put($idSerie.'/'.'v1.jpg', File::get($file2));

		$img3 = $file3->getClientOriginalName();
		$route3 = \Storage::disk('local')->put($idSerie.'/'.'h1.jpg', File::get($file3));





		DB::table('edu_imagen')->insert([

			'url' => 'imagenes/educaplay/categorias/2/series/'.$idSerie.'/'.'img1.jpg',
    	'ubicacion_id' => '1',
			'serie_id' => $idSerie,

]);
		DB::table('edu_imagen')->insert([

    	'url' => 'imagenes/educaplay/categorias/2/series/'.$idSerie.'/'.'img2.jpg',
    	'ubicacion_id' => '2',
			'serie_id' => $idSerie,


]);
		DB::table('edu_imagen')->insert([

			'url' => 'imagenes/educaplay/categorias/2/series/'.$idSerie.'/'.'img3.jpg',
    	'ubicacion_id' => '3',
			'serie_id' => $idSerie,

]);


		return $this->welcome();


	}

}

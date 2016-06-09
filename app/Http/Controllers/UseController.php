<?php

namespace App\Http\Controllers;
use DB;
use File;
use Mail;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class UseController extends Controller {

	public function __construct()
	{

	  // $this->middleware('auth');
	}

	public function welcome(){

		return view('welcome');
	}

	public function registro(){
		// $email = \Auth::user() -> email;

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
			'contacto' => 'required|max:150',
			'tel' => 'required|max:20',
			'correo' => 'required|email|max:200',
			'correoalternativo' => 'required|email|max:200',
			'produccion' => 'required|max:500',
			'fecha' => 'required|date|max:20',
			'tematica' => 'required',
			'sinopsis' => 'required',
			'director' => 'required|max:150',
			'perfildirector' => 'required|max:150',
			'productor' => 'required|max:150',
			'perfilproductor' => 'required|max:150',
			'imagen1' => 'required|mimes:jpeg',
			'imagen2' => 'required|mimes:jpeg',
			'imagen3' => 'required|mimes:jpeg',
			'url' => 'required',
			'condiciones' => 'required|accepted',
			'derechos' => 'required|accepted',

			// 'file2' => 'mimes:jpeg,bmp,png',
		]);

		$institucion = $request->input('institucion');
		$pais = $request->input('pais');
		$direccion = $request->input('direccion');
		$representante = $request->input('representante');
		$cargo = $request->input('cargo');
		$contacto = $request->input('contacto');
		$tel = $request->input('tel');
		$correo = $request->input('correo');
		$correoalternativo = $request->input('correoalternativo');
		$produccion = $request->input('produccion');
		$fecha = $request->input('fecha');
		$tematica = $request->input('tematica')+1;
		$sinopsis = $request->input('sinopsis');
		$director = $request->input('director');
		$perfildirector = $request->input('perfildirector');
		$productor = $request->input('productor');
		$perfilproductor = $request->input('perfilproductor');
		$file1 = $request->file('imagen1');
		$file2 = $request->file('imagen2');
		$file3 = $request->file('imagen3');
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
			'correoalternativo' => $correoalternativo,
			'nombre_produccion' => $produccion,
			'fecha' => $fecha,
			'clasifica_id' => $tematica,
			'sinopsis' => $sinopsis,
			'director' => $director,
			'perfildirector' => $perfildirector,
			'nombre_productor' => $productor,
			'perfilproductor' => $perfilproductor,
			'url' => $url,
			'condiciones' => '1',
			'derechos' => '1',

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

	public function votacion(){
			// $email = \Auth::user() -> email;

			$n_votos = DB::table('muestra_votacion')->whereemail($email)->count();

			if($n_votos < 5){

				$id_usuario = DB::table('users')->whereemail($email)->get();

				$id_muestra = 0;

				DB::table('muestra_votacion')->insert([
					'muestra_id' => $id_muestra,
					'user_id' => $id_usuario,
				]);

	return 1;

}
else {
	return 0;
}

	}

}

<?php

namespace App\Http\Controllers;
use DB;
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

		#$file = $request->file('file');
		print_r($request->file);
		//indicamos que queremos guardar un nuevo archivo en el disco local
		#\Storage::disk('local')->put('miarchivo.jpg',\File::get($file));

		return $this->welcome;

	}

}

<?php namespace App\Http\Controllers;

use App\peliculas;
use Iluminate\Http\Controllers;
use Iluminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class PeliculasController extends Controller 
{
    // const MODEL = "App\Peliculas";
    
    
    //Metodo para ver todas los datos de una tabla de la base de datos
    function index(){
        $peliculas = Peliculas::all();
        return response()->json($peliculas,200);
    }

    // Metodo para ver solo un registro
    function show($id){
        $peliculas = Peliculas::find($id);
        return response()->json($peliculas,200);
        // return "Metodo show: ". $peliculas;
    }
}

<?php namespace App\Http\Controllers;

use App\peliculas;
use Illuminate\Http\Controllers;
use Illuminate\Http\Request;
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

    // Metodo solo una pelicula especifica
    function show($id){
        $peliculas = Peliculas::find($id);
        return response()->json($peliculas,200);
    }

    // Metodo para crear un nuevo registro en la tabla
    function create(Request $request){
        // dd($request->all());
        $peliculas = Peliculas::create($request->all());
        return response()->json($peliculas,200);
    }
}
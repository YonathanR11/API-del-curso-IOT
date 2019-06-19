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
        $peliculas = Peliculas::create($request->all());
        return response()->json($peliculas,200);
    }
    
    // Metodo para actualizar un registro en la tabla
    function update(Request $request, $id){
        $peliculas = Peliculas::findorfail($id);
        $peliculas -> update($request->json()->all());
        return response()->json($peliculas,200);
    }
    
    // Metodo para actualizar un registro en la tabla
    function destroy(Request $request, $id){
        $peliculas = Peliculas::findorfail($id); //para encontrar un registro por id
        $peliculas -> delete();
        return response()->json($peliculas,200);
    }
}
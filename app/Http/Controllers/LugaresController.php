<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LugaresModel;

class LugaresController extends Controller
{
     //Obtener Lugares
    public function index(){
        $lugares = LugaresModel::all();
        return response()->json($lugares);
    }

    //Obtener por id
    public function show($id){
        $lugar = LugaresModel::find($id);
        
        if(!$lugar){
            return response()->json(['error' => 'Lugar no encontrado por ID'], 404);
        }

        return response()->json($lugar);
    }

    //Crear una nueva
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:0'
        ]);
        
        $lugar = LugaresModel::create($request->all());

        return response()->json($lugar, 201);

    }

    //Actualizar lugar
    public function update(Request $request, $id){

        $lugar = LugaresModel::find($id);

        if(!$lugar){
            return response()->json(['error' => 'Lugar no encontrado con ese ID'], 404);
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'capacidad' => 'required|integer|min:0'
        ]);

        $lugar->update($request->all());

        return response()->json($lugar);

    }

    //Eliminar lugar
    public function destroy($id){
        $lugar = LugaresModel::find($id);

        if(!$lugar){
            return response()->json(['error' => 'No se ha encontrado ningun lugar con ese ID']);
        }

        $lugar->delete();

        return response()->json(['mensaje' => 'Lugar eliminado correctamente']);
    }
}

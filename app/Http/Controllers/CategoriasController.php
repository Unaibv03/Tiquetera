<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriasModel;

class CategoriasController extends Controller
{
    
    //Obtener categorias
    public function index(){
        $categorias = CategoriasModel::all();
        return response()->json($categorias);
    }

    //Obtener por id
    public function show($id){
        $categoria = CategoriasModel::find($id);
        
        if(!$categoria){
            return response()->json(['error' => 'Categoria no encontrada'], 404);
        }

        return response()->json($categoria);
    }

    //Crear una nueva
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);
        
        $categoria = CategoriasModel::create($request->all());

        return response()->json($categoria, 201);

    }

    //Actualizar categoria
    public function update(Request $request, $id){

        $categoria = CategoriasModel::find($id);

        if(!$categoria){
            return response()->json(['error' => 'Categoria no encontrada con ese ID'], 404);
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $categoria->update($request->all());

        return response()->json($categoria);

    }

    //Eliminar categoria
    public function destroy($id){
        $categoria = CategoriasModel::find($id);

        if(!$categoria){
            return response()->json(['error' => 'Categoria eliminada correctamente']);
        }

        $categoria->delete();

        return response()->json(['mensaje' => 'Categoria borrada con éxito']);

    }

}

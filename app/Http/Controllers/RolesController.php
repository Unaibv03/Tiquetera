<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RolesModel;

class RolesController extends Controller
{
     //Obtener roles
    public function index(){
        $roles = RolesModel::all();
        return response()->json($roles);
    }

    //Obtener por id
    public function show($id){
        $rol = RolesModel::find($id);
        
        if(!$rol){
            return response()->json(['error' => 'Rol no encontrado por ID'], 404);
        }

        return response()->json($rol);
    }

    //Crear una nueva
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000'
        ]);
        
        $rol = RolesModel::create($request->all());

        return response()->json($rol, 201);

    }

    //Actualizar rol
    public function update(Request $request, $id){

        $rol = RolesModel::find($id);

        if(!$rol){
            return response()->json(['error' => 'Rol no encontrado con ese ID'], 404);
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000'
        ]);

        $rol->update($request->all());

        return response()->json($rol);

    }

    //Eliminar rol
    public function destroy($id){
        $rol = RolesModel::find($id);

        if(!$rol){
            return response()->json(['error' => 'No se ha encontrado ningun rol con ese ID']);
        }

        $rol->delete();

        return response()->json(['mensaje' => 'rol eliminado correctamente']);
    }
}

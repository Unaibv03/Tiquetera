<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReseniasModel;

class ReseniaController extends Controller
{
    // Obtener todas las reseñas
    public function index()
    {
        $resenas = ReseniasModel::with(['usuario', 'evento'])->get();
        return response()->json($resenas);
    }

    // Obtener una reseña por ID
    public function show($id)
    {
        $resena = ReseniasModel::with(['usuario', 'evento'])->find($id);

        if (!$resena) {
            return response()->json(['error' => 'Reseña no encontrada por ID'], 404);
        }

        return response()->json($resena);
    }

    // Crear una nueva reseña
    public function store(Request $request)
    {   

        if($request->puntuacion>5){
            return response()->json(['Respuesta' => 'Tienes que poner una puntuación de entre 1 y 5']);
        }

        $request->validate([
            'comentario' => 'required|string|max:1000',
            'puntuacion' => 'required|integer|min:1|max:5',
            'usuario_id' => 'required|exists:usuarios,id',
            'evento_id' => 'required|exists:eventos,id',
        ]);

        $resena = ReseniasModel::create($request->all());

        return response()->json($resena, 201);
    }

    // Actualizar una reseña existente
    public function update(Request $request, $id)
    {
        $resena = ReseniasModel::find($id);

        if (!$resena) {
            return response()->json(['error' => 'Reseña no encontrada por ID'], 404);
        }

        $request->validate([
            'comentario' => 'sometimes|required|string|max:1000',
            'puntuacion' => 'sometimes|required|integer|min:1|max:5',
            'usuario_id' => 'sometimes|required|exists:usuarios,id',
            'evento_id' => 'sometimes|required|exists:eventos,id',
        ]);

        $resena->update($request->all());

        return response()->json($resena);
    }

    // Eliminar una reseña
    public function destroy($id)
    {
        $resena = ReseniasModel::find($id);

        if (!$resena) {
            return response()->json(['error' => 'Reseña no encontrada por ID'], 404);
        }

        $resena->delete();

        return response()->json(['mensaje' => 'Reseña eliminada correctamente']);
    }
}

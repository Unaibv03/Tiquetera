<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventosModel;

class EventosController extends Controller
{
    // Obtener todos los eventos
    public function index()
    {
        $eventos = EventosModel::with(['lugar', 'categoria'])->get();
        return response()->json($eventos);
    }

    // Obtener un evento por ID
    public function show($id)
    {
        $evento = EventosModel::with(['lugar', 'categoria'])->find($id);

        if (!$evento) {
            return response()->json(['error' => 'Evento no encontrado con ese ID'], 404);
        }

        return response()->json($evento);
    }

    // Crear un nuevo evento
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fechayHora' => 'required|date',
            'precio' => 'required|numeric|min:0',
            'lugar_id' => 'required|exists:lugares,id',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $evento = EventosModel::create($request->all());

        return response()->json($evento, 201);
    }

    // Actualizar un evento existente
    public function update(Request $request, $id)
    {
        $evento = EventosModel::find($id);

        if (!$evento) {
            return response()->json(['error' => 'Evento no encontrado'], 404);
        }

        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'fechayHora' => 'sometimes|required|date',
            'precio' => 'sometimes|required|numeric|min:0',
            'lugar_id' => 'sometimes|required|exists:lugares,id',
            'categoria_id' => 'sometimes|required|exists:categorias,id',
        ]);

        $evento->update($request->all());

        return response()->json($evento);
    }

    // Eliminar un evento
    public function destroy($id)
    {
        $evento = EventosModel::find($id);

        if (!$evento) {
            return response()->json(['error' => 'Evento no encontrado'], 404);
        }

        $evento->delete();

        return response()->json(['mensaje' => 'Evento eliminado correctamente']);
    }
}

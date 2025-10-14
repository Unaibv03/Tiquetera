<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntradasModel;

class EntradasController extends Controller
{
  // Obtener todas las entradas
    public function index()
    {
        $entradas = EntradasModel::with(['usuario', 'evento'])->get();
        return response()->json($entradas);
    }

    // Obtener una entrada por ID
    public function show($id)
    {
        $entrada = EntradasModel::with(['usuario', 'evento'])->find($id);

        if (!$entrada) {
            return response()->json(['error' => 'Entrada no encontrada con ese ID'], 404);
        }

        return response()->json($entrada);
    }

    // Crear una nueva entrada
    public function store(Request $request)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1',
            'fechaCompra' => 'required|date',
            'usuario_id' => 'required|exists:usuarios,id',
            'evento_id' => 'required|exists:eventos,id',
        ]);

        $entrada = EntradasModel::create($request->all());

        return response()->json($entrada, 201);
    }

    // Actualizar una entrada
    public function update(Request $request, $id)
    {
        $entrada = EntradasModel::find($id);

        if (!$entrada) {
            return response()->json(['error' => 'Entrada no encontrada con ese ID'], 404);
        }

        $request->validate([
            'cantidad' => 'sometimes|required|integer|min:1',
            'fechaCompra' => 'sometimes|required|date',
            'usuario_id' => 'sometimes|required|exists:usuarios,id',
            'evento_id' => 'sometimes|required|exists:eventos,id',
        ]);

        $entrada->update($request->all());

        return response()->json($entrada);
    }

    // Eliminar una entrada
    public function destroy($id)
    {
        $entrada = EntradasModel::find($id);

        if (!$entrada) {
            return response()->json(['error' => 'Entrada no encontrada con ese ID'], 404);
        }

        $entrada->delete();

        return response()->json(['mensaje' => 'Entrada eliminada correctamente']);
    }

    //Nuevo método para mostrar el carrito
    public function carrito()
    {
        if (!auth()->check()) {
            // Usuario NO autenticado: muestra la vista con mensaje
            return view('entradas.carrito')->with('mensaje', 'Inicia sesión para acceder al carrito.');
        }

        $usuario = auth()->user();

        $entradas = EntradasModel::with('evento.categoria')
            ->where('usuario_id', $usuario->id)
            ->get();

        return view('entradas.carrito', compact('entradas'));
    }


}

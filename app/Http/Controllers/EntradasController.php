<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntradasModel;
use Illuminate\Support\Facades\Auth;
use App\Models\EventosModel;

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
    
        //Crear el carrito
        $carrito = session('carrito', []);
        return view('entradas.carrito', compact('carrito'));

    }

    //Agregar entradas al carrito principal
    public function agregarAlCarrito(Request $request){

        $request->validate([
            'evento_id' => 'required|exists:eventos,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $evento = EventosModel::with('categoria')->findOrFail($request->evento_id);

        $carrito = session()->get('carrito', []);

        $carrito[] = [
            'evento_id' => $evento->id,
            'nombre_evento' => $evento->nombre,
            'fecha_evento' => $evento->fecha,
            'categoria' => $evento->categoria->nombre ?? 'Sin categoría',
            'cantidad' => $request->cantidad,
            'precio' => $evento->precio,
            'subtotal' => $evento->precio * $request->cantidad,
        ];

        session(['carrito' => $carrito]);

        return redirect()->route('entradas.carrito')->with('success', 'Entrada agregada al carrito.');

    }

    //Confirmar la compra (guardar en base de datos)
    public function procesarCompra()
    {
        $usuario = Auth::user();
        $carrito = session('carrito', []);

        foreach ($carrito as $entrada) {
            EntradasModel::create([
                'cantidad' => $entrada['cantidad'],
                'fechaCompra' => now(),
                'usuario_id' => $usuario->id,
                'evento_id' => $entrada['evento_id'],
            ]);
        }

        session()->forget('carrito');

        return redirect()->route('todosLosEventos')->with('success', '¡Compra procesada correctamente!');
    }


    //Eliminar un item del carrito
    public function eliminarDelCarrito($index){

        $carrito = session()->get('carrito',[]);
        unset($carrito[$index]);
        session(['carrito' => array_values($carrito)]);

        return redirect()->route('entradas.carrito')->with('success', 'Entrada eliminada del carrito.');

    }

}

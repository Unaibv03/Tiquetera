<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UsuariosModel;

class UsuariosController extends Controller
{
    //Obtener todos los usuarios
    public function index(){
        $usuarios = UsuariosModel::with('rol')->get();//Con esto nos referimos al método que está en el modelo de usuarios
        return response()->json($usuarios);
    }

    //Obtener un usuario por ID
    public function show($id){
        $usuario = UsuariosModel::with('rol')->find($id);

        if(!$usuario){
            return response()->json(['error' => 'No se encontró ningun usuario con ese ID']);
        }

        return response()->json($usuario);

    }

    //Crear un nuevo usuario
    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:6',
            'rol_id' => 'required|exists:roles,id',
        ]);

        $usuario = UsuariosModel::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash seguro
            'rol_id' => $request->rol_id,
        ]);

        return response()->json($usuario, 201);

    }

    //Actualizar usuario
    public function update(Request $request, $id){
    $usuario = UsuariosModel::find($id);

    if(!$usuario){
        return response()->json(['message' => 'Usuario no encontrado con ese ID'], 404);
    }

    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'password' => 'required|string|min:6',
        'email' => 'required|email|unique:usuarios,email,' . $id,
        'rol_id' => 'required|exists:roles,id',
    ]);

    // Hashear la contraseña antes de actualizar
    $validated['password'] = Hash::make($validated['password']);

    $usuario->update($validated);

    return response()->json([
        'message' => 'Usuario actualizado correctamente',
        'usuario' => $usuario,
    ]);
}


    // Eliminar un usuario
    public function destroy($id)
    {
        $usuario = UsuariosModel::find($id);

        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado con ese ID'], 404);
        }

        $usuario->delete();

        return response()->json(['mensaje' => 'Usuario eliminado correctamente']);
    }

}

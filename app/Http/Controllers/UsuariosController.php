<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UsuariosModel;
use Illuminate\Support\Facades\Auth;
use App\Models\EntradasModel;

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

        // Validar y guardar datos validados en $validated
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'rol_id' => 'required|exists:roles,id',
        ]);

        // Comprobar si ya existe usuario con ese email
        $existeUsuario = UsuariosModel::where('email', $validated['email'])->first();

        if ($existeUsuario) {
            // Devolver error 409 Conflict con mensaje
            return redirect()->route('cuentaNoCreada')->with('Message', 'Usuario no creado porque el email se repite');
        }

        // Crear nuevo usuario
        $usuario = new UsuariosModel();
        $usuario->nombre = $validated['nombre'];
        $usuario->email = $validated['email'];
        $usuario->password = bcrypt($validated['password']);
        $usuario->rol_id = $validated['rol_id'];
        $usuario->save();

        //Devolver un json de confirmación
        
        //return response()->json($usuario, 201);

        //Redireccionar a la página que indica que se ha creado correctamente
        return redirect()->route('cuentaCreadaExito')->with('Message', 'Usuario creado correctamente');

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

    public function login(Request $request){

        //Validamos los campos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //Buscar el usuario por email
        $usuario = UsuariosModel::where('email', $request->email)->first();

        if(!$usuario || !Hash::check($request->password, $usuario->password)){
            
            return redirect()->route('sesionNoIniciada');

        }

        //Autenticación correcta
        Auth::login($usuario);

        $request->session()->regenerate();

        //Redirigir a la página principal
        return redirect()->route('inicial');
    }

    //Método para cerrar sesión, salir de la autenticacion
    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }

    //Método para cambiar de vista
    public function showChangePasswordForm(){
        return view('perfil.cambiar_contraseña');
    }

    //Método para cambiar la contraseña
    public function updatePassword(Request $request){

        //Validar datos del formulario
        $request->validate([
            'clave_antigua' => 'required',
            'clave_nueva' => 'required|min:8|confirmed'
        ], [
            'clave_nueva.min' => 'La nueva contraseña debe tener al menos 8 caracteres.',  // <-- personalizado
            'clave_nueva.confirmed' => 'La confirmación de la nueva contraseña no coincide.',
        ]);

        //Verificar que la contraseña actual es correcta
        if(!Hash::check($request->clave_antigua, Auth::user()->password)){
            return back()->withErrors(['password_actual' => 'La contraseña actual no es correcta']);
        }

        //Actualizamos la contraseña
        $user = Auth::user();
        $user->password = Hash::make($request->clave_nueva);
        Hash::make($request->clave_nueva);
        $user->save();

        return back()->with('success', 'Contraseña actualizada correctamente.');
    }

    public function nuevaPassword(Request $request){

        //Validar entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        //Buscar usuario por email
        $usuario = UsuariosModel::where('email', $request->email)->first();

        if(!$usuario){
            return back()->withErrors(['email' => 'No se encontró ningún usuario con ese email.']);
        }

        //Actualizar contraseña(hasheada)
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        return back()->with('status', 'Contraseña actualizada correctamente');

    }

    //Mostrar datos en el perfil
    public function perfil()
{
    $usuario = Auth::user();

    // Obtener todas las entradas del usuario con el evento relacionado
    $entradas = EntradasModel::with('evento')
                ->where('usuario_id', $usuario->id)
                ->get();

    return view('perfil.perfil', compact('usuario', 'entradas'));
}

}
 
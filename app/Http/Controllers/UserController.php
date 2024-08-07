<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->correo = $request->correo;
        $user->telefono = $request->telefono;
        $user->contrasena = Hash::make($request->contrasena);
        $user->save();

        return response()->json(['message' => 'Usuario creado correctamente'], 201);
    }

    public function encrypt(Request $request)
    {
        $encryptedText = Crypt::encryptString($request->text);
        return response()->json(['encrypted' => $encryptedText]);
    }

    public function decrypt(Request $request)
    {
        $decryptedText = Crypt::decryptString($request->encrypted);
        return response()->json(['text' => $decryptedText]);
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
     /**
     * Mostrar formulario
     */
    public function edit()
    {
        return view('auth.change-password');
    }

    /**
     * Actualizar contraseña
     */
    public function update(Request $request)
    {
       
    $request->validate([

        'current_password' => ['required'],

        'password' => [
            'required',
            'confirmed',
        ],
    ]);

    $user = Auth::user();

    // verifica contraseña actual
    if (!Hash::check(
        $request->current_password,
        $user->password
    )) {

        return back()->withErrors([
            'current_password' =>
                'Contraseña incorrecta'
        ]);
    }

    // ACTUALIZA
    $user->password = Hash::make(
        $request->password
    );

    // MUY IMPORTANTE
    $user->must_change_password = false;

    // MUY IMPORTANTE
    $user->password_changed_at = now();

    $user->save();

    // refresca usuario autenticado
    Auth::setUser($user->fresh());

    return redirect('/admin/home')
        ->with(
            'success',
            'Contraseña actualizada correctamente.'
        );
    }
}

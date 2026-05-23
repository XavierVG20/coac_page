<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class PasswordExpirationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            $user = Auth::user();

            // Cambio obligatorio primer login
            if ($user->must_change_password) {

                if (!$request->is('change-password')) {

                      return redirect()
                        ->route(
                            'password.change.form'
                        );
                }
            }

            // Expira cada 60 días
            if ($user->password_changed_at) {

                $days = Carbon::parse(
                    $user->password_changed_at
                )->diffInDays(now());

                if ($days >= 60) {

                    Auth::logout();

                    return redirect('/login')
                        ->with(
                            'error',
                            'Su contraseña ha expirado. Debe actualizarla.'
                        );
                }
            }
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if (!$user || optional($user->perfil)->descripcion !== $role) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Olvida la cookie también aquí
            $cookieName = config('session.cookie');
            $forgetCookie = cookie()->forget($cookieName);

            return redirect('/login')
                    ->withErrors('Acceso denegado.')
                    ->withCookie($forgetCookie);
        }

        return $next($request);
    }
}

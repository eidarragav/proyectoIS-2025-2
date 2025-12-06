<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $roles)
    {
        // Si no está logueado
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        // Convertir "admin|candidate|company" → ['admin', 'candidate', 'company']
        $roleArray = explode('|', $roles);

        // Recuperar el nombre del rol del usuario
        $userRole = $user->role->role_name ?? null;
    

        // Verificar si el rol del usuario está permitido
        if (!in_array($userRole, $roleArray)) {
            abort(403, $userRole ? 'Acceso denegado para el rol: ' . $userRole : 'Acceso denegado: rol no asignado.');
        }

        return $next($request);
    }
}

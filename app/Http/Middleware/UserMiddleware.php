<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifiez si l'utilisateur est authentifié et s'il est un utilisateur régulier
        if (Auth::check() && !Auth::user()->is_admin) {
            return $next($request);
        }

        // Redirigez ou retournez une réponse appropriée si l'utilisateur n'est pas autorisé
        return redirect('/home')->with('error', 'Vous n\'avez pas accès à cette page.');

    }
}
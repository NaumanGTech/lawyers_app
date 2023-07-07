<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        if ($user->role == 'admin') {
            return $next($request);
        } else if ($user->role == "lawyer" || $user->role == "user") {
            return redirect()->back()->with('error', 'You do not have access to this page');
        } else {
            Auth::logout();
            return redirect('/login');
        }
    }
}

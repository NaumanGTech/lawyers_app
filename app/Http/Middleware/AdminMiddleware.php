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
        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();
        if (Auth::user()->role == 'admin') {
            return $next($request);
        } else if ((Auth::user()->role !== 'admin')) {
            return redirect()->back()->with('error', 'You do not have access of this page');
        } else {
            return redirect('/login');
        }
    }
}

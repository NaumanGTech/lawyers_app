<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();
        if (Auth::user()->role == 'user') {
            return $next($request);
        } else if ((Auth::user()->role !== 'user')) {
            return redirect()->back()->with('error', 'You do not have access of this page');
        } else {
            return redirect('/login');
        }
    }
}

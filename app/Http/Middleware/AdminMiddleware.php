<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            //admin is 0
            //user is 1
            if (Auth::user()->role == 0) {
                return $next($request);

            } else{
                return redirect('/')->with('message', 'Access denied');

            }

        }else{
             return redirect('/')->with('message', 'Please Log in first');
        }
        return $next($request);
    }
}

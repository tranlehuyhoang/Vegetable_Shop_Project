<?php

namespace App\Http\Middleware;

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
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == '1') {
                // dd(Auth::user());
                return $next($request);
            } else {
                return redirect('admin/login')->with('status', 'Access Denied! as you are not as admin');
            }
        } else {
            return redirect('admin')->with('status', 'Please Login First');
        }
    }
}

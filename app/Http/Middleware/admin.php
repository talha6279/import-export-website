<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect()->route('user.login')->with('failure', 'You must be logged in to access this page.');
        }

        // Check if the user is an admin
        if (Auth::user()->usertype !== 'admin') {
            return redirect()->route('website')->with('failure', 'You do not have sufficient permissions to access this page.');
        }

        return $next($request);
    }
}

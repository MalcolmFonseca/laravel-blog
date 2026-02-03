<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCurrentUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //remove path and leave just slug to compare
        $slug = str_replace(['profile/', 'edit/'], '', request()->path());
        if (request()->user()->id != $slug) {
            return redirect('/');
        }
        return $next($request);
    }
}

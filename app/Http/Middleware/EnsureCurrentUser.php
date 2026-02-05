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
    public function handle(Request $request, Closure $next, String $arg = "User"): Response
    {
        //skip all checks if user is admin
        if (request()->user()->can('admin')) {
            return $next($request);
        }

        //Argument string is used to judge if the middleware should compare the current user against the user id given, or against the user id attached to another model
        switch ($arg) {
            case "User":
                //remove path and leave just slug to compare
                if (request()->user()->id != request()->route('user')->id) {
                    return redirect('/');
                }
                break;
            case "Comment":
                if (request()->user()->id != request()->route('comment')->user->id) {
                    return redirect('/');
                }
                break;
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        if ((int) auth()->user()->role !== 1) {
            return redirect()->route('course.main.index');
        }

        return $next($request);
    }

}

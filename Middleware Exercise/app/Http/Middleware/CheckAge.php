<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->input('age');

    if ($age <= 17) {
        return redirect('/access-denied'); // Redirect to access denied page
    } elseif ($age >= 18 && $age <= 20) {
        return redirect('/home'); // Redirect to homepage
    } elseif ($age >= 21) {
        return redirect('/restricted'); // Redirect to restricted page
    }

        return $next($request);
    }
}


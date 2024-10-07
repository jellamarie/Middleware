<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $age = session('age');  // Retrieve age from session

        // If age is not set, redirect to welcome to input age
        if (is_null($age)) {
            return redirect('/welcome');
        }

        // Redirect based on age
        if ($age < 18) {
            return redirect('/access-denied');
        } elseif ($age >= 21) {
            // Check if user has already visited the restricted area
            if (!session('visited_restricted_area')) {
                // Set session variable to prevent future redirects to restricted-area
                session(['visited_restricted_area' => true]);
                return redirect('/restricted-area');
            }
        }

        // If age is 18-20, allow access to the requested page
        return $next($request);
    }
}

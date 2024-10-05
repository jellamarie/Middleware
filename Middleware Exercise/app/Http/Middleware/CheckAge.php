<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckAge
{
    public function handle($request, Closure $next)
    {
        // Retrieve the age from the session
        $age = Session::get('age');
        $username = Session::get('username', 'Guest'); // Retrieve username from the session, default to 'Guest'

        // Check if age is not set or invalid
        if (is_null($age) || !is_numeric($age)) {
            // Redirect to access-denied if age is not set or invalid
            return redirect('/access-denied');
        }

        // Check if age is less than 18
        if ($age < 18) {
            // Log access denied
            $logData = sprintf(
                "[%s] Access Denied - Username: %s, Age: %d\n",
                now()->toDateTimeString(),
                $username,
                $age
            );
            file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);

            return redirect('/access-denied');
        } elseif ($age >= 21) {
            // User is verified for age 21+
            Session::put('verificationStatus', 'Verified');

            // Log access granted for 21 and above
            $logData = sprintf(
                "[%s] Access Granted - Username: %s, Age: %d, Status: Verified\n",
                now()->toDateTimeString(),
                $username,
                $age
            );
            file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);
        } else {
            // Age is between 18 and 20
            Session::put('verificationStatus', 'Unverified');

            // Log access granted for 18-20 with 'Unverified' status
            $logData = sprintf(
                "[%s] Access Granted - Username: %s, Age: %d, Status: Unverified\n",
                now()->toDateTimeString(),
                $username,
                $age
            );
            file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);
        }

        return $next($request);
    }
}

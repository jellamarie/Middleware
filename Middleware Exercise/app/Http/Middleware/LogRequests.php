<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
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
        $logData = sprintf(
            "[%s] %s %s\n",
            now(),
            $request->method(),
            $request->fullUrl()
        );

        file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);

        return $next($request);
    }
}

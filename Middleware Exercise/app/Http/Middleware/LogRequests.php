<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequests
{
    public function handle(Request $request, Closure $next): Response
    {
        // Prepare log data with timestamp, HTTP method, and full URL
        $logData = sprintf(
            "[%s] %s %s\n",
            now()->toDateTimeString(),
            $request->method(),
            $request->fullUrl()
        );

        // Log the request details to log.txt
        if (file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND) === false) {
            \Log::error('Failed to write to log.txt');
        }

        return $next($request);
    }
}
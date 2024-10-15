<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;


class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $name = Session::get('name', 'Guest');
        $age = Session::get('age');
        $verification_stat = Session::get('verification_stat', 'def Verified');

        $ipAddress = $request->ip();

        // Prepare log data with timestamp, HTTP method, full URL, and username
        $logData = sprintf(
            "[%s], %s, %s, Name: %s, IP: %s, Age: %s, Verification Status: %s\n",
            now()->toDateTimeString(), // Time
            $request->method(), // HTTP method (GET, POST, etc.)
            $request->fullUrl(), // Full URL of the request
            $name,
            $ipAddress, 
            $age, 
            $verification_stat 
        );

        // Attempt to log the request details in log.txt file
        if (file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND) === false) {
            // Log an error message if writing to the log file fails
            \Log::error('Failed to write to log.txt');
        }

        if ($verification_stat == 'Not Verified') {
            return redirect('/Access-denied');
        }
        // Proceed with the next middleware/handler in the stack
        return $next($request);
    }
}

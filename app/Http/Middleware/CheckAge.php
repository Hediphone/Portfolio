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
        // Retrieve the age from the session
        $age = Session::get('age');

        // Check the age and set the verification status
        if ($age < 18) {
            return redirect('/access-denied');
        } elseif ($age >= 21) {
            Session::put('verificationStatus', 'Verified');
        } else {
            Session::put('verificationStatus', 'Unverified');
        }

        return $next($request);
    }
}

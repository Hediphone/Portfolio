<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

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

        if (!$age) {
            return redirect('/Verify');
        }
        
        // Check the age and set the verification status
        if ($age < 18) {
            return redirect('/Access-denied');
        } elseif ($age >= 18) {
            Session::put('verificationStatus', 'Verified');
        } else {
            Session::put('verificationStatus', 'Unverified');
        }

        return $next($request);
    }
}

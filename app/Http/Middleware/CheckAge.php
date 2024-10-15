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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $minAge
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $minAge)
{
    $age = Session::get('age');

    // Check if the user meets the minimum age requirement
    if ($age) {
        if ($age < $minAge) {
            return redirect('/Access-denied');
        } else{
            Session::put('verification_stat', 'Verified');
        }
    }

    return $next($request); 
}

}

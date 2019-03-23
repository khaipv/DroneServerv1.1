<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Customer
{
    public function handle($request, Closure $next)
    {

        if (!Auth::check()) // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
        return redirect('login');

    $user = Auth::user();

    if($user->vai_tro_id==3)
    {
        return $next($request);
    }
        return redirect('home')->with('error','You have not permission access');

    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class Freelancer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->role=="Freelancer"){
            return $next($request);
        }
        return redirect('/')->with('error','You don"t have employer role');
    }
}
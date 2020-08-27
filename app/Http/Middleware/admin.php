<?php

namespace App\Http\Middleware;

use Closure;
use App\Cv;
use App\user;
use auth;
class admin
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
        if(Auth()->user()->situa === 'admin' || Auth()->user()->situa === 'supAdmin')
        {
            return $next($request);
        }
        else{
            return redirect('/errors/403');
        }

        /*if(Auth::user()->situa == 'admin' )
        {
            return $next($request);
        }
        elseif (Auth::user()->situa == 'supAdmin') {
            return $next($request);
        }
        else{
            return redirect('/errors/403');
        }*/
        
    }
}



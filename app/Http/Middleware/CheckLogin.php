<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogin
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
        if(Auth::check()){
            if(Auth::user()->role->contains('title',"Admin")){
                return $next($request);
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect('/login');
        }
        
    }
}

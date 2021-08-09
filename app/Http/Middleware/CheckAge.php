<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        if($request->age>10){
            echo "Your are valid";
            return $next($request);

        }else{

            echo "Your are not valid";
            return redirect('/list');
        }
       
    }
}

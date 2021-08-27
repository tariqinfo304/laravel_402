<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WebMiddleware
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

       // echo "call WEb Middleware";
        
         if(session("username"))
         {
            return $next($request);
         }
         else
         {
            return redirect("web/login");
         }
         


        /*$data = $next($request);

        echo $data;

        echo "call WEb Middleware";*/
    }
}

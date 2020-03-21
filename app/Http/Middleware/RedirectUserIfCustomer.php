<?php

namespace App\Http\Middleware;

use Closure;

class RedirectUserIfCustomer
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

        if($request->user() && !$request->user()->user_type){

            return redirect('customer/dashbord');

        }

        return $next($request);
    }
}
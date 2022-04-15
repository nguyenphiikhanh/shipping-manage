<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerRoleCheck
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
            $role = Auth::user()->role;
            if($role != 'customer'){
                if($role == 'admin') return redirect()->route('admin-home');
                if($role == 'shipper') return redirect()->route('shipper-home');
            }
        }
        return $next($request);
    }
}

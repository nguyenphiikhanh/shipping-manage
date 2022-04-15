<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ShipperRoleCheck
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
            if($role != 'shipper'){
                if($role == 'admin') return redirect()->route('admin-home');
                if($role == 'customer') return redirect()->route('customer-home');
            }
        }
        return $next($request);
    }
}

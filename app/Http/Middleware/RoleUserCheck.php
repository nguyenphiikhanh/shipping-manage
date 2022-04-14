<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class RoleUserCheck
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
            if (Auth::user()->role == "admin") {
                return redirect()->route('admin-home');
            }

            if (Auth::user()->role == "customer") {
                return redirect()->route('customer-home');
            }

            if (Auth::user()->role == "shipper") {
                return redirect()->route('shipper-home');
            }
        }
        else return view('home');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserMiddleware
{
     public function handle(Request $request, Closure $next)
    {
        //admin role == 1
        //user role == 0
        //therapist role == 2
        
        if(Auth::check()){
            if(Auth::user()->role == '0'){
                return $next($request);
            } else if(Auth::user()->role == '1'){
                return redirect('/admin/admin-home')->with('status', 'Access Denied');
            } else if(Auth::user()->role == '2'){
                return redirect('/therapist/therapist-home')->with('status', 'Access Denied');
            }
        } else {
                return redirect('/login')->with('status', 'Login To Gain Access');

        }
        return $next($request);
    }
}
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
        
        if(Auth::check()){
            if(Auth::user()->role == '0' && Auth::user()->status == 'active'){
                return $next($request);
            } else if(Auth::user()->role == '0' && Auth::user()->status == 'banned'){
                // return $next($request);
                Auth::logout();
                return redirect()->route('login')->with('error', 'Too many reports. Your account has been banned.');
            } else if(Auth::user()->role == '1'){
                return redirect('/admin/admin-home')->with('status', 'Access Denied');
            } 
        } else {
                return redirect('/login')->with('status', 'Login To Gain Access');

        }
        return $next($request);
    }
}
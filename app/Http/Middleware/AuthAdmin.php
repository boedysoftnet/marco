<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
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
        if (session()->has('user_id')){
            /*todo lanjutkan disini untuk login admin yach*/
            return $next($request);
        }else{
            return  redirect(route('front.member.login-member'));
        }
    }
}

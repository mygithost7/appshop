<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next){


        if(Auth::check()){


            if($this->isAdmin()) {

                return $next($request);

            }

        }
        return redirect('/auth/login');

    }


    public function isAdmin(){

        $user = Auth::user();


        if($user->role->name === "Administrator" && $user->is_active === 1){

            return true;

        }

        return false;
    }
}

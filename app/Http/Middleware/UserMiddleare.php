<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleare
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
        // dd('hello I come from middleware');
        // if(!Auth::check()){
        //     return redirect()->to('/');
        // }
        // return $next($request);

        //dd(auth()->user());
        $userType = auth()->user()->user_type;
        //dd($userType);
        if($userType == 1){ 
            return $next($request);  
        }
        return redirect()->to ('/');
        
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        
        if($request->user()->can('Dashboard')){
            return $next($request);
        }
        else{
            request()->session()->flash('error','You do not have any permission to access this page');
            if(auth()->user()){
                return redirect()->route('account');

            }else{
                return redirect()->route('user.login');
            }
        }
    }
}

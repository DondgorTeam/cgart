<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
{
    use DatabaseTransactions;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $adminName)
    {
        // if(auth()=>check() && auth()->user()->name == $adminName){
        //     return $next($request);
        // }
        // return redirect('/');
    }
}

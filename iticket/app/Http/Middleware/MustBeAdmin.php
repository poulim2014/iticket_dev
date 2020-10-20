<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
        $user = $request->user();
        if($user){
            if($user->position == 'admin'){
                return $next($request);
            }
            elseif ($user->position == 'sale') {
                # code...
            }
        }
        abort(403);
        
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class CheckUserRole
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

        Log::info('CheckUserRole middleware working');

        
        if (Session::has('user_role')) {
            $role = Session::get('user_role');
            Log::info('User role found in session: ' . $role); 
            
            
            if ($role === 'teacher') {
                
                return $next($request);
            } elseif ($role === 'student') {
                
                return $next($request);
            } elseif ($role === 'anonymous') {
                
                return redirect()->route('unauthorized');
            }
        } 

        
        return redirect()->route('unauthorized');
    }
}

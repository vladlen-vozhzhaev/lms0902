<?php

namespace App\Http\Middleware;

use App\Models\BindUserRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = auth()->user()->getAuthIdentifier();
        $bindRole = BindUserRole::where('user_id', $userId)->first();
        if($bindRole->role_id === 1){
            return $next($request);
        }else{
            return redirect()->intended('/login');
        }
    }
}

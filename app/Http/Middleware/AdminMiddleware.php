<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if(Auth::check()){
            $user = Auth::user();
            dd($user);
            if($user->isAdmin()){
                return $next($request);
            }
            else{
                return redirect()->route('login.admin');
            }
        }
        else{
            Auth::logout();
            return redirect()->route('login.admin');
        }
    }
}
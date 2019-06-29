<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CekJabatanMiddleware
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
        if (Auth::user()->jabatan == 'admin') {
            return redirect(route('admin_home'));
        } else {
            return redirect(route('sales_home'));
        }

        return $next($request);
    }
}

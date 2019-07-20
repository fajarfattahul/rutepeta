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
        } elseif (Auth::user()->jabatan == 'sales') {
            return redirect(route('sales_home'));
        } else {
            return redirect(route('kurir_home'));
        }

        return $next($request);
    }
}

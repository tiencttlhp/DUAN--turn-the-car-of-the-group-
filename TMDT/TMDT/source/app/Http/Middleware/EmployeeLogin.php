<?php

namespace App\Http\Middleware;

use Closure;

class EmployeeLogin
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
        if(!session('nhan-vien')){
            return redirect('nhan-vien/dang-nhap');
        }
        return $next($request);
    }
}

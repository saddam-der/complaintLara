<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('level') == 'admin') {
            return $next($request);
        }

        return redirect()->back()
            ->with('alert', 'Mohon maaf anda bukan admin.');
    }
}

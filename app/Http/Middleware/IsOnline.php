<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IsOnline
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('is_online') && Session::get('is_online') == TRUE) {
            return $next($request);
        }

        return redirect()->route('login')
            ->with('alert', 'Anda harus login terlebih dahulu!.');
    }
}

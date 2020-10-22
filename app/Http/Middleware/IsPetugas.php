<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IsPetugas
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('level') == 'admin' && 'petugas') {
            return $next($request);
        }

        return redirect()->back()
            ->with('alert', 'Mohon maaf anda bukan admin dan petugas');
    }
}

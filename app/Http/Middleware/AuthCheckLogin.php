<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Jika pengguna tidak login, alihkan ke halaman login atau halaman lain
            return redirect('/login'); // Ganti dengan rute yang sesuai untuk halaman login Anda
        }

        // Jika pengguna sudah login, lanjutkan ke halaman beranda
        return $next($request);
    }
}

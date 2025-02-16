<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Pastikan Auth diimpor

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login dan memiliki role admin
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect()->route('adminLoginView')->with('error', 'Anda harus login sebagai admin!');

        }

        return $next($request);
    }
}

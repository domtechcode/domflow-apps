<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     return redirect(RouteServiceProvider::HOME);
            // }

            if (Auth::guard($guard)->check()) {
                // Ambil peran pengguna menggunakan Spatie Permission
                $user = Auth::user();
                $roles = $user->getRoleNames(); // Mendapatkan semua peran pengguna

                // Redirect ke halaman dashboard berdasarkan peran
                if ($roles->contains('Admin')) {
                    return redirect()->route('dashboard-sales');
                } elseif ($roles->contains('manager')) {
                    return redirect('/manager-dashboard');
                } elseif ($roles->contains('user')) {
                    return redirect('/user-dashboard');
                }
                // Tambahkan peran lain jika diperlukan
            }
        }

        return $next($request);

        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        // return $next($request);
    }
}

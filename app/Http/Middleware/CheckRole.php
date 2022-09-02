<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, String $role)
    {
        if ($role == 'user' && Auth::user()->role != 'user') {
            abort(403);
            // return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à effectuer cette opération');
        }
        if ($role == 'deliverer' && Auth::user()->role != 'user') {
            abort(403);
        }
        if ($role == 'eatery' && Auth::user()->role != 'user') {
            abort(403);
        }
        return $next($request);
    }
}

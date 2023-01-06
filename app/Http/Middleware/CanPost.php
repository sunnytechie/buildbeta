<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanPost
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
        if (Auth()->user()->can_post) {
            return $next($request);
        }
        return redirect()->route('seller.settings');
    }
}

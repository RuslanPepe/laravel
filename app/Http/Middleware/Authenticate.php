<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response{
      if (!Auth::check()){
        Log::info('User not authenticated, redirecting to /', ['url' => $request->url()]);
        return redirect('/');
      }
      Log::info('User authenticated', ['user_id' => Auth::id()]);
      return $next($request);
    }
}

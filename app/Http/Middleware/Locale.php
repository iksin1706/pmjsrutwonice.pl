<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if ($request->method() === 'GET') {
            $segment = $request->segment(1);
        
            if (!in_array($segment, config('app.locales'))) {
                $segments = $request->segments();
                $fallback = session('locale') ?: config('app.fallback_locale');
                array_unshift($segments, $fallback); // Use array_unshift to prepend the fallback locale
        
                return redirect()->to('/' . implode('/', $segments)); // Add a leading slash to the URL
            }
        
            session(['locale' => $segment]);
            app()->setLocale($segment);
        }

        return $next($request);
    }
}

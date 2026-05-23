<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Evita iframe malicioso
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // Evita MIME sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Protección XSS básica
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // HTTPS obligatorio
        $response->headers->set(
            'Strict-Transport-Security',
            'max-age=31536000; includeSubDomains'
        );

        // CSP
      $response->headers->set(
    'Content-Security-Policy',
    "default-src 'self'; script-src 'self' 'unsafe-inline' https://maps.googleapis.com https://maps.gstatic.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; frame-src 'self' https://www.google.com https://maps.google.com https://www.google.com/maps/;"
);

        return $response;
    }
}

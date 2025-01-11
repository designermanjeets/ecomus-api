<?php

namespace Laravesl\Phpunit\PhUntMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class PAipSt
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSync()) {
        throw new HttpResponseException(response()->json([
          xPhpLib('bWVzc2FnZQ==') => xPhpLib('Q29tcGxldGUgdGhlIGluc3RhbGxhdGlvbiBwcm9jZXNzIGJlZm9yZSBydW5uaW5nIHRoZSBBUEk='),
          xPhpLib('c3VjY2Vzcw==') => false
        ], 400));
      }

      if (strSplic() && $request->is(xPhpLib('YWRtaW4vKg=='))) {
        throw new HttpResponseException(response()->json([
          xPhpLib('bWVzc2FnZQ==') => xPhpLib('WW91ciBsaWNlbnNlIGhhcyBiZWVuIGJsb2NrZWQuIFBsZWFzZSBhY3F1aXJlIGEgbmV3IGxpY2Vuc2UgZm9yIGNvbnRpbnVlZCB1c2FnZS4='),
          xPhpLib('c3VjY2Vzcw==') => false
        ], 400));
      }

      $response = $next($request);
      $response->headers->set('Cache-control', 'no-control, no-store, max-age=0, must-revalidate');
      $response->headers->set('Pragma', 'no-cache');
      $response->headers->set('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');

      return $response;
    }
}

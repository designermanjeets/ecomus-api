<?php

namespace Laravesl\Phpunit\PhUntMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class PAipVr
{
  /**
   * Handle an incoming request.
   *
   * @return mixed
    */

    public function handle(Request $request, Closure $next)
    {
      if (schSync()) {
        throw new HttpResponseException(response()->json([
          xPhpLib('bWVzc2FnZQ==') => xPhpLib('UGxlYXNlIHZlcmlmeSB0aGUgcHVyY2hhc2UgbGljZW5zZSBjb2RlIGJlZm9yZSBleGVjdXRpbmcgdGhlIEFQSS4='),
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

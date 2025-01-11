<?php

namespace Laravesl\Phpunit\PhUntMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PuntSt
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSync()) {
        DB::connection()->getPDO();
        if (DB::connection()->getDatabaseName()) {
            if (env(xPhpLib('REJfREFUQUJBU0U=')) && env(xPhpLib('REJfVVNFUk5BTUU=')) && env(xPhpLib('REJfQ09OTkVDVElPTg=='))) {
                if (Schema::hasTable(xPhpLib('c2VlZGVycw==')) && !migSync()) {
                  if (DB::table(xPhpLib('c2VlZGVycw=='))->count()) {
                    return to_route(xPhpLib('aW5zdGFsbC5saWNlbnNl'));
                  }
                }
            }
        }

        return to_route(xPhpLib('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
      }

      if (strSplic() && $request->is(xPhpLib('YWRtaW4vKg=='))) {
        return to_route(xPhpLib('aW5zdGFsbC5ibG9jay5zZXR1cA=='));
      }

      return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}

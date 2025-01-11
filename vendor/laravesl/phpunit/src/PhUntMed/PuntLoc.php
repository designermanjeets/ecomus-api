<?php

namespace Laravesl\Phpunit\PhUntMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PuntLoc
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has(xPhpLib('bG9jYWxl'))) {
            App::setLocale(Session::get(xPhpLib('bG9jYWxl')));
        }

        return $next($request);
    }
}

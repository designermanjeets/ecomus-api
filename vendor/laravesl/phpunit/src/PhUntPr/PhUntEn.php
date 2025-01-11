<?php

namespace Laravesl\Phpunit\PhUntPr;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PhUntEn extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('phXml', function ($exUnt) {
            return xPhpLib($exUnt);
        });
    }
}

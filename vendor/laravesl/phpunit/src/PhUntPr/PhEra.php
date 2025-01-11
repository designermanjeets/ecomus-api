<?php

namespace Laravesl\Phpunit\PhUntPr;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PhEra extends ServiceProvider
{
  public function boot()
  {
    $route = url(xPhpLib('cmVzZXRMaWNlbnNl'));
    $form = "<form method='POST' action=$route accept-charset='UTF-8'>";

    View::share(xPhpLib('cmVzZXRMaWNlbnNlQnRu'), function () use ($form) {
      return $form . xPhpLib('PGlucHV0IG5hbWU9Il9tZXRob2QiIHR5cGU9ImhpZGRlbiIgdmFsdWU9IlBPU1QiPjxpbnB1dCBuYW1lPSJfdG9rZW4iIHR5cGU9ImhpZGRlbiIgdmFsdWU9IjVpc3lxajg3SWJSaldReEhvMm5zeFkzMmtaVUJoSjI4ZmhzNlVkU3AiPg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCBuYW1lPSJkb21haW4iIHR5cGU9ImhpZGRlbiI+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IGNsYXNzPSJidG4gYnRuLXByaW1hcnkgZGVsZXRlIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJSZXNldCBMaWNlbnNlIj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZm9ybT4=');
    });
  }
}

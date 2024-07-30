<?php

namespace Microthunder\Laragen\Providers;

use Illuminate\Support\ServiceProvider;

class LaragenServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
      __DIR__ . '..../resources/config/gen.php' => config_path('gen.php')
    ]);
  }
}

<?php

namespace Fersot\ExcelTo;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        // Optionally, you might want to publish configuration files or other assets here.
    }

    public function register()
    {
        $this->app->singleton('excel-to', function () {
            return new ExcelTo();
        });
    }
}

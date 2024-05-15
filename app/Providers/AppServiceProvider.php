<?php

namespace App\Providers;

use App\SiteSettings;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('settings', function ($app) {
            return new SiteSettings();
        });

        Blade::directive('settings', function ($expression) {
            return "<?php echo settings($expression); ?>";
        });

    }
}

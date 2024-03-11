<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();

        Blade::directive('formatNumber', function($expression){
            return "<?php echo formatNumber($expression); ?>";
        });
    }

    function formatNumber($number){
        if($number < 1000){
            return $number;
        }elseif($number < 1000000){
            return floor($number/1000) . 'K';
        }else{
            return floor($number/1000000) . 'M';
        }
    }
}

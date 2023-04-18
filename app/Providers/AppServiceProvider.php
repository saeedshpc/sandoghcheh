<?php

namespace App\Providers;

use App\Enums\AccessLevels;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
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
        Model::unguard();

        Gate::define('midLevel', function(User $user){
            return $user->access_level === AccessLevels::MidLevel->value;
        });

        Gate::define('chief', function(User $user){
            return $user->access_level === AccessLevels::Chief->value;
        });

        Blade::if('midLevel', function(){
            return request()->user()?->can('midLevel');
        });

        Blade::if('chief', function(){
            return request()->user()?->can('chief');
        });
    }
}

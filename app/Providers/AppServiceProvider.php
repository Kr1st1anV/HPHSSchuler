<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();

        Gate::define('admin', function (User $user) {
            switch ($user->email) {
                case 'cheryls@schulerprogram.org':
                    return true;
                    break;
                case 'danielleb@schulerprogram.org':
                    return true;
                    break;
                case 'dacee@schulerprogram.org':
                    return true;
                    break;
                case 'rubenr@schulerprogram.org':
                    return true;
                    break;
                case 'maevec@schulerprogram.org':
                    return true;
                    break;
                case 'noelle@schulerprogram.org':
                    return true;
                    break;
                case 'isabellad@schulerprogram.org':
                    return true;
                    break;
                default: 
                    return false;
            }
            return $user->username === 'kristianvelazquezz';
        });

        Blade::if('admin', function (){
            return request()->user()?->can('admin');
        });
    }
}

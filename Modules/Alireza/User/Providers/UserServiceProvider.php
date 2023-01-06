<?php

namespace Alireza\User\Providers;

use Alireza\User\Models\User;
use Alireza\User\Policies\UserPolicy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
     $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
     $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'User');

     Route::middleware('web')->namespace('Alireza\User\Http\Controllers')->group(__DIR__ . '/../Routes/user_routes.php');
     Gate::policy(User::class, UserPolicy::class);
     Factory::guessFactoryNamesUsing(static function (string $name){
         return 'Alireza\User\Database\Factories\\' . class_basename($name) . 'Factory';
     });
    }

    public function boot(){
        config()->set('panelConfig.menus.users',[
            'url' => route('users.index'),
            'title' => 'کاربران',
            'icon' => 'account',
        ]);
    }
}

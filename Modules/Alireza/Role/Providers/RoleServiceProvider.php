<?php

namespace Alireza\Role\Providers;

use Alireza\Role\Database\Seeders\PermissionSeeder;
use Alireza\Role\Models\Permission;
use Alireza\Role\Models\Role;
use Alireza\Role\Policies\RolePolicy;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Role');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations/');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang/');


        Route::middleware('web')->namespace('Alireza\Role\Http\Controllers')->group(__DIR__ . '/../Routes/role_routes.php');
        DatabaseSeeder::$seeders[] = PermissionSeeder::class;

        Gate::policy(Role::class, RolePolicy::class);
        Gate::before(static function($user){
           return $user->hasPermissionTo(Permission::PERMISSION_SUPER_ADMIN) ? true : null;

        });
    }

    public function boot(){
        config()->set('panelConfig.menus.roles',[
            'url' => route('roles.index'),
            'title' => 'مقام ها',
            'icon' => 'bug',
        ]);

    }


}

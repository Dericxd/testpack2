<?php

namespace Databyte\ChilexpressApi\Database\Seeds;

use Databyte\AdministrationUi\Models\Group;
use Databyte\AdministrationUi\Models\Permission;
use Illuminate\Database\Seeder;

class GroupHasPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(array_keys(\Route::getRoutes()->getRoutesByName()))->each(function ($route) {
            Permission::firstOrCreate(['slug' => "route:{$route}"], ['name' => "route:{$route}"]);
        });

        $permissions_chilexpress_super_administrator = [
            'route:administration-ui::home',
            'route:administration-ui::user.my-profile',
            'route:administration-ui::password.change',
            'route:administration-ui::user.photo.change',
        ];

        Group::firstOrCreate(['slug' => 'chilexpress-api-administrator'])->assignPermissions($permissions_chilexpress_super_administrator)->hideGroup();
    }
}

<?php

namespace Databyte\ChilexpressApi\Database\Seeds;

use Databyte\AdministrationUi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            "route:administration-ui::home",
            "route:administration-ui::user.my-profile",
            "route:administration-ui::password.change",
            "route:administration-ui::user.photo.change",
        ])->each(function ($permission) {
            Permission::firstOrCreate(['slug' => $permission], ['name' => $permission]);
        });
    }
}

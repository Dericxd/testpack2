<?php

namespace Databyte\ChilexpressApi\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChilexpressApiSettingTableSeeder::class);
        $this->call(ChilexpressRegionTableSeeder::class);
        $this->call(ChilexpressCountyTableSeeder::class);
        //$this->call(PermissionsTableSeeder::class);
        //$this->call(GroupTableSeeder::class);
        //$this->call(GroupHasPermissionsTableSeeder::class);

    }
}

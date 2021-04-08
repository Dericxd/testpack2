<?php

namespace Databyte\ChilexpressApi\Database\Seeds;

use Databyte\AdministrationUi\Models\Group;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::firstOrcreate([
            'slug' => 'chilexpress-administrator',
        ], [
            'name' => 'Chilexpress administrator',
            'description' => '',
        ]);
    }
}

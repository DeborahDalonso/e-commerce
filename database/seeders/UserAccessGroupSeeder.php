<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAccessGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('user_access_groups')->insert([
            ['description' => 'admin'], 
            ['description' => 'buyer'], 
            ['description' => 'seller']
        ]);
    }
}

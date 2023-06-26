<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSellerStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('user_seller_status_types')->insert([
            ['description' => 'approved'], 
            ['description' => 'pending'], 
            ['description' => 'rejected']
        ]);
    }
}

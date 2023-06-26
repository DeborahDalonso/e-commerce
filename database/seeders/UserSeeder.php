<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Store;
use Carbon\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        User::factory()->count(10)->state(new Sequence(
            ['user_access_group_id' => 1],
            ['user_access_group_id' => 2],
            ['user_access_group_id' => 3]
        ))->create();
    }
    // ->each(function ($user){
    //     if($user->user_access_group_id == 3) $user->has(Store::factory())->create();
    // })
}

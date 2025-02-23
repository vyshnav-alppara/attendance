<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InternalUser;

class InternalUserSeeder extends Seeder
{
    public function run()
    {
        InternalUser::factory()->count(10)->create(); 
    }
}
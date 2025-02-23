<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExternalUser;

class ExternalUserSeeder extends Seeder
{
    public function run()
    {
        ExternalUser::factory()->count(5)->create();
    }
}
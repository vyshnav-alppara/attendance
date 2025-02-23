<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InternalUser;
use Illuminate\Support\Facades\Hash;


class InternalUserSeeder extends Seeder
{
    public function run()
    {
        InternalUser::factory()->count(10)->create();
        InternalUser::create([
            'username' => 'vyshnav',
            'email' => 'vyshnav@vyshnav.com',
            'phone' => '1234567890',
            'password' => Hash::make('password'),
        ]);
    }
}

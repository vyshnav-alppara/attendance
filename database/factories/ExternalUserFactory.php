<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ExternalUser;
use App\Models\InternalUser;

class ExternalUserFactory extends Factory
{
    protected $model = ExternalUser::class;

    public function definition()
    {
        return [
            'user_id' => InternalUser::factory(), // Links to an InternalUser
            'phone_2' => $this->faker->phoneNumber,
            'address' => $this->faker->streetAddress,
            'dob' => $this->faker->date('Y-m-d', '2000-01-01'), // Random DOB before 2000
        ];
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attendance;
use App\Models\InternalUser;
use App\Models\ExternalUser;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition()
    {
        $isInternal = $this->faker->boolean; // Randomly choose between internal or external user

        return [
            'internal_user_id' => $isInternal ? InternalUser::factory() : null,
            'external_user_id' => !$isInternal ? ExternalUser::factory() : null,
            'login_time' => $this->faker->dateTimeThisMonth,
            'logout_time' => $this->faker->dateTimeThisMonth,
        ];
    }
}
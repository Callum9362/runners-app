<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'family_name' => $this->faker->lastName . 's',
        ];
    }
}

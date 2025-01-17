<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyFactory extends Factory
{
    protected $model = Family::class;

    public function definition(): array
    {
        return [
            'family_name' => $this->faker->lastName . 's',
        ];
    }
}

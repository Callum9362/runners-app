<?php

namespace Database\Factories;

use App\Models\Goal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoalFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker
                ->randomElement(['pending', 'in progress', 'completed']),
            'priority' => $this->faker
                ->randomElement(['low', 'medium', 'high']),
            'due_date' => $this->faker
                ->dateTimeBetween('now', '+1 year')
                ->format('Y-m-d'),
            'user_id' => User::factory(),
        ];
    }
}

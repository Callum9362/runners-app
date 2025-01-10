<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    public function run(): void
    {
        $goals = [
            [
                "title" => "First Goal",
                "description" => "Run First Marathon",
                "status" => "pending",
                "priority" => "high",
                "due_date" => "2025-01-10",
                "user_id" => 1,
            ],
            [
                "title" => "Second Goal",
                "description" => "Buy a new car",
                "status" => "pending",
                "priority" => "medium",
                "due_date" => "2025-01-10",
                "user_id" => 1,
            ],
            [
                "title" => "Third Goal",
                "description" => "Buy a new house",
                "status" => "pending",
                "priority" => "low",
                "due_date" => "2025-01-10",
                "user_id" => 1,
            ]
        ];

        foreach ($goals as $goal) {
            Goal::create($goal);
        }
    }
}

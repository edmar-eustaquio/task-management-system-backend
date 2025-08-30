<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => 'pending',
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'order' => $this->faker->numberBetween(1, 10),
            'user_id'     => User::factory()->create()->id,
        ];
    }
}

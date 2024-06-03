<?php
namespace Database\Factories\Jms;

use App\Models\Jms\JmsJob;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JmsJobFactory extends Factory
{
    protected $model = JmsJob::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'company' => $this->faker->company,
            'location' => $this->faker->city,
            'salary' => $this->faker->numberBetween(30000, 150000),
            'created_by' => User::factory(), // assuming User factory exists
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Steps;
use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Steps>
 */
class StepsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'note_id' => Note::factory(),
            'description' => $this->faker->sentence(),
            'completed' => false,
        ];
    }
}

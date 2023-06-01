<?php

namespace Database\Factories;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Projects::class;
    public function definition(): array
    {
        return [
            'project_name' => $this->faker->words(2, true),
            'user_id' => $this->faker->numberBetween(9, 11),
            'domain_name' => $this->faker->domainName,
            'project_api_key' => $this->faker->uuid,
            'key_generated_time' => $this->faker->dateTime(),
        ];
    }
}

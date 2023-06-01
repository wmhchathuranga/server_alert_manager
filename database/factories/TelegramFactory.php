<?php

namespace Database\Factories;

use App\Models\Telegram;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telegram>
 */
class TelegramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $telegram = Telegram::class;
    public function definition(): array
    {
        return [
            'project_id' => $this->faker->numberBetween(1, 10),
            'bot_api_key' => "6248662752:AAHJUog1kx2HQqBzcSvaxUAAHONMQQipJWc",
            'channel_id' => "-988576488",
        ];
    }
}

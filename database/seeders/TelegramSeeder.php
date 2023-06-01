<?php

namespace Database\Seeders;

use App\Models\Telegram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TelegramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Telegram::factory()->count(10)->create();
    }
}

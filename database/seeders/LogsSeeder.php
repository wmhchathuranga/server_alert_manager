<?php

namespace Database\Seeders;

use App\Models\Logs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Logs::factory()->count(10)->create();
    }
}

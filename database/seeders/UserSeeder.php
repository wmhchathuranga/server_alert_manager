<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();

        User::create(
            [
                'name' => 'Harshana Chathuranga',
                'email' => "harshana.all@gmail.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$1itzCOBT1VclYKhU4CZYl.sjO3kVPoRnpNrcfIA0FDp4Kk3q0Eg3a', // password
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => null,
                'current_team_id' => null,
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'phone' => '09123456789',
            'date_of_birth' => '2000-01-01',
            'region' => 'Yangon',
            'township' => 'Hlaing',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '09987654321',
            'date_of_birth' => '2002-02-02',
            'region' => 'Mandalay',
            'township' => 'Chanmyathazi',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}

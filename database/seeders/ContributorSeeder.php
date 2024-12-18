<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 10 contributors
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'username' => fake()->name(),
                'email' => $email = fake()->unique()->safeEmail(),
                // The password will be the same as the username
                'password' => Hash::make($email),
                'role' => 'contributor'
            ]);
        }
    }
}

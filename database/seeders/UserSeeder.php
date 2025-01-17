<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $user = [
                'name' => 'Admin',
                'email' => 'admin@student.com',
                'password' => Hash::make('admin@123'),
                'status' => 1, // Active
            ];

        User::insert($user);
    }

}

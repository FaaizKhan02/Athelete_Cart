<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Check if admin already exists
        if (!User::where('email', 'admin@athletecart.com')->exists()) {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@athletecart.com',
                'password' => Hash::make('Admin@123'),
                'role' => 'admin',
            ]);
            
            $this->command->info('Admin user created successfully!');
            $this->command->info('Email: admin@athletecart.com');
            $this->command->info('Password: Admin@123');
        } else {
            $this->command->info('Admin user already exists.');
        }

        
    }
}
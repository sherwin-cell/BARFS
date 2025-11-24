<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('email', 'admin18@gmail.com')->first();

        if (!$admin) {
            User::create([
                'name' => 'Admin18',
                'email' => 'admin18@gmail.com',
                'password' => Hash::make('admin18'),
                'role' => 'admin',
            ]);
        }
    }
}

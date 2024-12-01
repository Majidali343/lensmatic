<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Check if the admin user already exists to prevent duplication
        $adminEmail = 'admin@uniPerks.com';
        $admin = User::where('email', $adminEmail)->first();

        if (!$admin) {
            // Create an admin user
            User::create([
                'first_name' => 'Admin ',
                'last_name' => 'uniPerks',
                'email' => $adminEmail,
                'phone' => '03225023730',
                'institute' => 'UniPerks',
                'password' => Hash::make('uniPerks@98765'),
                'role' => 'admin', 
                'isuserapproved' => 'yes'
            ]);
        }
    }
}

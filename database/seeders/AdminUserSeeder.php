<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASSWORD');

        if (empty($email) || $password === null || $password === '') {
            $this->command?->warn('ADMIN_EMAIL and ADMIN_PASSWORD must be set in .env to seed the admin user.');

            return;
        }

        User::firstOrCreate(
            ['email' => $email],
            [
                'name' => 'Admin',
                'password' => $password,
                'is_admin' => true,
            ]
        );
    }
}

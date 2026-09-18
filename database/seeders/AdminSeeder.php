<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'jayminpanchal9037@gmail.com'],
            [
                'name' => 'Jaymin Panchal',
                'password' => bcrypt('Jaymin@4200'),
                'is_admin' => true,
            ]
        );

        $this->command?->info('Admin user: jayminpanchal9037@gmail.com / Jaymin@4200');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\AdminUser::factory(1)->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'password' => bcrypt("12345"),
        ]);
    }
}

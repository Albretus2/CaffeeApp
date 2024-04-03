<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'role' => 'super_admin',
            'email' => 'test@example.com',
            'alamat' => 'Bandung',
            'phone' => '0895542121',
        ]);
    }
}

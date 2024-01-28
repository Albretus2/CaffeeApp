<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'role' => 'super_admin',
            'email' => 'test@example.com',
            'alamat' => 'Bandung',
            'phone' => '0895542121',
        ]);

        Table::factory()->create([
            'name' => 'T1'
        ]);
        Table::factory()->create([
            'name' => 'T2'
        ]);
        Table::factory()->create([
            'name' => 'T3'
        ]);
        Table::factory()->create([
            'name' => 'T4'
        ]);
        Table::factory()->create([
            'name' => 'T5'
        ]);
        Table::factory()->create([
            'name' => 'T6'
        ]);
        Table::factory()->create([
            'name' => 'T7'
        ]);


        // data menu default --- 
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Cappucino',
            'slug' => 'cappucino1',
            'price' => 49,
            'deskripsi' => 'Kapucino is an Italian coffee drink made with espresso and milk',
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Americano',
            'slug' => 'americano1',
            'price' => 54,
            'deskripsi' => 'Caffè Americano or Amerikano is a coffee drink made by mixing a shot of espresso with hot water.',
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Espresso',
            'slug' => 'espresso1',
            'price' => 50,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Machiato',
            'slug' => 'machiato',
            'price' => 59,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Mocha',
            'slug' => 'mocaha1',
            'price' => 59,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Coffe Late',
            'slug' => 'coffe_late',
            'price' => 44,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
        ]);
    }
}

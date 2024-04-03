<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data menu default --- 
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Cappucino',
            'slug' => 'cappucino1',
            'price' => 49,
            'deskripsi' => 'Kapucino is an Italian coffee drink made with espresso and milk',
            'image' => '/menuImages/menuImg.jpg'
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Americano',
            'slug' => 'americano1',
            'price' => 54,
            'deskripsi' => 'Caffè Americano or Amerikano is a coffee drink made by mixing a shot of espresso with hot water.',
            'image' => '/menuImages/menuImg.jpg'
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Espresso',
            'slug' => 'espresso1',
            'price' => 50,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
            'image' => '/menuImages/menuImg.jpg'
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Machiato',
            'slug' => 'machiato',
            'price' => 59,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
            'image' => '/menuImages/menuImg.jpg'
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Mocha',
            'slug' => 'mocaha1',
            'price' => 59,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
            'image' => '/menuImages/menuImg.jpg'
        ]);
        Menu::factory()->create([
            'user_id' => 1,
            'name' => 'Coffe Late',
            'slug' => 'coffe_late',
            'price' => 44,
            'deskripsi' => 'Espresso is a type of coffee produced by extracting ground coffee beans with a jet of hot water under high pressure.',
            'image' => '/menuImages/menuImg.jpg'
        ]);

        // end data menu
    }
}

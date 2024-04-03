<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // generate data user dumy
        $this->call(UserSeeder::class);
        // end data user

        // generate data news dummy
        $this->call(NewsSeeder::class);
        // end //

        // generate data gallery dummy
        $this->call(GallerySeeder::class);
        // end //

        // generate data table dummy
        $this->call(TableSeeder::class);
        // end //

        // generate data menu dummy
        $this->call(MenuSeeder::class);
        // end //

        // generate data todo dummy
        $this->call(TodoSeeder::class);
        // end //
    }
}

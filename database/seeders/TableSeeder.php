<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data meja default
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
        // end data meja

    }
}

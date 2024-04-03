<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::factory()->create([
            'user_id' => 1,
            'title' => 'Kopi kopi apa yang warna nya hitam?',
            'image' => 'newsImg/imgDummyPost.jpg',
            'excerpt' => 'Caffè Americano atau Amerikano adalah minuman kopi yang dibuat dengan menc',
            'body' => "Caffè Americano atau Amerikano adalah minuman kopi yang dibuat dengan mencampurkan satu seloki espresso dengan air panas. Air panas yang digunakan dalam minuman ini adalah sebanyak 6 hingga 8 ons.
            Caffè Americano atau Amerikano adalah minuman kopi yang dibuat dengan mencampurkan satu seloki espresso dengan air panas. Air panas yang digunakan dalam minuman ini adalah sebanyak 6 hingga 8 ons."
        ]);
    }
}

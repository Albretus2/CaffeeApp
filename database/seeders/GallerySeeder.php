<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data gallery default
        Gallery::factory()->create([
            'user_id' => 1,
            'title' => 'kopi1',
            'image' => 'galleryImages/imageDefault1.jpg'
        ]);
        Gallery::factory()->create([
            'user_id' => 1,
            'title' => 'kopi2',
            'image' => 'galleryImages/imageDefault2.jpg'
        ]);
        Gallery::factory()->create([
            'user_id' => 1,
            'title' => 'kopi3',
            'image' => 'galleryImages/imageDefault3.jpg'
        ]);
        Gallery::factory()->create([
            'user_id' => 1,
            'title' => 'kopi4',
            'image' => 'galleryImages/imageDefault4.jpg'
        ]);
        Gallery::factory()->create([
            'user_id' => 1,
            'title' => 'kopi5',
            'image' => 'galleryImages/imageDefault5.jpg'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pertarungan Terakhir',
            'descripsi' => 'Aksi seru penuh adrenalin di medan perang modern.',
            'price' => 80000,
            'stok' => 60,
            'cover_photo' => 'PertarunganTerakhir.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'Asmara di Bawah Hujan',
            'descripsi' => 'Cerita romantis tentang dua insan yang bertemu dalam keindahan hujan.',
            'price' => 70000,
            'stok' => 50,
            'cover_photo' => 'asmara.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);

        Book::create([
            'title' => 'Kerajaan Ajaib',
            'descripsi' => 'Petualangan fantasi di kerajaan yang penuh sihir dan keajaiban.',
            'price' => 75000,
            'stok' => 45,
            'cover_photo' => 'kerajaan.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ]);

        Book::create([
            'title' => 'Bayangan Malam',
            'descripsi' => 'Kisah horor yang mencekam dengan suasana gelap dan penuh misteri.',
            'price' => 65000,
            'stok' => 30,
            'cover_photo' => 'bayanganmalam.jpg',
            'genre_id' => 4,
            'author_id' => 4,
        ]);

        Book::create([
            'title' => 'Jejak Sang Detektif',
            'descripsi' => 'Misteri yang rumit dan penuh teka-teki yang harus dipecahkan sang detektif.',
            'price' => 70000,
            'stok' => 40,
            'cover_photo' => 'jejakdetektif.jpg',
            'genre_id' => 5,
            'author_id' => 5,
        ]);
    }
}

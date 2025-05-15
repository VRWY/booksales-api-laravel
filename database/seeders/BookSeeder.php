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
            'genre' => 'Action',
        ]);

        Book::create([
            'title' => 'Asmara di Bawah Hujan',
            'descripsi' => 'Cerita romantis tentang dua insan yang bertemu dalam keindahan hujan.',
            'price' => 70000,
            'stok' => 50,
            'genre' => 'Romance',
        ]);

        Book::create([
            'title' => 'Kerajaan Ajaib',
            'descripsi' => 'Petualangan fantasi di kerajaan yang penuh sihir dan keajaiban.',
            'price' => 75000,
            'stok' => 45,
            'genre' => 'Fantasy',
        ]);

        Book::create([
            'title' => 'Bayangan Malam',
            'descripsi' => 'Kisah horor yang mencekam dengan suasana gelap dan penuh misteri.',
            'price' => 65000,
            'stok' => 30,
            'genre' => 'Horror',
        ]);

        Book::create([
            'title' => 'Jejak Sang Detektif',
            'descripsi' => 'Misteri yang rumit dan penuh teka-teki yang harus dipecahkan sang detektif.',
            'price' => 70000,
            'stok' => 40,
            'genre' => 'Mystery',
        ]);
    }
}

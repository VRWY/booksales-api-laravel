<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Raka Wirawan',
            'title' => 'Pertarungan Terakhir',
        ]);

        Author::create([
            'name' => 'Laras Prameswari',
            'title' => 'Asmara di Bawah Hujan',
        ]);

        Author::create([
            'name' => 'Dimas Arya',
            'title' => 'Kerajaan Ajaib',
        ]);

        Author::create([
            'name' => 'Indah Kusuma',
            'title' => 'Bayangan Malam',
        ]);

        Author::create([
            'name' => 'Andi Pratama',
            'title' => 'Jejak Sang Detektif',
        ]);
    }
}

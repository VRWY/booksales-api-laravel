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
            'photo' => 'raka_jpg',
            'bio' => 'Raka Wirawan adalah seorang profesional yang berdedikasi di bidangnya, dikenal atas semangatnya dalam berinovasi dan memberikan kontribusi nyata dalam setiap proyek yang dikerjakannya.',
        ]);

        Author::create([
            'name' => 'Laras Prameswari',
            'photo' => 'laras_prameswari.jpg',
            'bio' => 'Laras Prameswari adalah penulis roman yang piawai menggambarkan emosi dan dinamika hubungan dalam nuansa puitis dan menyentuh hati.',
        ]);

        Author::create([
            'name' => 'Dimas Arya',
            'photo' => 'dimas_arya.jpg',
            'bio' => 'Dimas Arya adalah penulis fiksi fantasi yang dikenal dengan imajinasi luas dan alur cerita yang memikat pembaca dari berbagai kalangan.',
        ]);
        
        Author::create([
            'name' => 'Indah Kusuma',
            'photo' => 'indah_kusuma.jpg',
            'bio' => 'Indah Kusuma merupakan penulis novel misteri dan horor yang mahir menciptakan suasana tegang dan penuh kejutan dalam setiap karyanya.',
        ]);
        
        Author::create([
            'name' => 'Andi Pratama',
            'photo' => 'andi_pratama.jpg',
            'bio' => 'Andi Pratama adalah penulis cerita detektif yang terkenal dengan gaya penulisan analitis dan karakter yang cerdas.',
        ]);
    }
}

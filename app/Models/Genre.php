<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['id' => 1, 'name' => 'Petualangan'],
        ['id' => 2, 'name' => 'Pengembangan Diri'],
        ['id' => 3, 'name' => 'Fiksi Aksi'],
        ['id' => 4, 'name' => 'Politik'],
        ['id' => 5, 'name' => 'Fantasi'],
    ];

    public function getGenres(){
        return $this->genres;
    }
}

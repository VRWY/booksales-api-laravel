<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        ['id' => 1, 'name' => 'Tere Liye'],
        ['id' => 2, 'name' => 'Mark Manson'],
        ['id' => 3, 'name' => 'Tere Liye'],
        ['id' => 4, 'name' => 'Tere Liye'],
        ['id' => 5, 'name' => 'Tere Liye'],
    ];

    public function getAuthors(){
        return $this->authors;
    }
}

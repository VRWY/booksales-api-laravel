<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title', 'descripsi', 'price', 'stok', 'cover_photo', 'genre_id', 'author_id'
    ];
}

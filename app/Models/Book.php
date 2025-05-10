<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Pertualangan seorang pemuda',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.pjg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tenang kehidupan dan filosofi hidup seseorang',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.pjg',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'Pergi',
            'description' => 'Kelanjutan perjalanan menantang dari si pemuda',
            'price' => 45000,
            'stock' => 12,
            'cover_photo' => 'pergi.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ],
        [
            'title' => 'Negeri Para Bedebah',
            'description' => 'Intrik dan strategi dalam dunia politik dan ekonomi',
            'price' => 48000,
            'stock' => 20,
            'cover_photo' => 'negeri_para_bedebah.jpg',
            'genre_id' => 4,
            'author_id' => 4
        ],
        [
            'title' => 'Bumi',
            'description' => 'Awal dari petualangan di semesta fantasi',
            'price' => 46000,
            'stock' => 14,
            'cover_photo' => 'bumi.jpg',
            'genre_id' => 5,
            'author_id' => 5
        ],
    ];

    public function getBooks(){
        return $this->books;
    }
}

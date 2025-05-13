<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => '1',
            'name' => 'Andrea Hirata',
            'photo' => 'andrea_hirata.jpg',
            'bio' => 'Andrea Hirata adalah penulis novel "Laskar Pelangi" yang terinspirasi dari kisah nyata masa kecilnya di Belitung.'
        ],
        [
            'id' => '2',
            'name' => 'Ahmad Fuadi',
            'photo' => 'ahmad_fuadi.jpg',
            'bio' => 'Ahmad Fuadi adalah penulis trilogi "Negeri 5 Menara", terinspirasi dari pengalamannya di pesantren dan luar negeri.'
        ],
        [
            'id' => '3',
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Tere Liye adalah penulis produktif asal Indonesia yang terkenal lewat seri novel "Bumi", "Pulang", dan lainnya.'
        ],
        [
            'id' => '4',
            'name' => 'Habiburrahman El Shirazy',
            'photo' => 'habiburrahman.jpg',
            'bio' => 'Habiburrahman El Shirazy adalah penulis novel islami populer, seperti "Ayat-Ayat Cinta" dan "Ketika Cinta Bertasbih".'
        ],
        [
            'id' => '5',
            'name' => 'Pidi Baiq',
            'photo' => 'pidi_baiq.jpg',
            'bio' => 'Pidi Baiq adalah seniman multitalenta yang dikenal sebagai penulis novel "Dilan: Dia adalah Dilanku Tahun 1990".'
        ]

    ];

    public function getAuthors() {
        return $this->authors;
    }
}

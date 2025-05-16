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
            'name' => 'Andrea Hirata',
            'photo' => 'andrea_hirata.jpg',
            'bio' => 'Andrea Hirata adalah penulis novel "Laskar Pelangi" yang terinspirasi dari kisah nyata masa kecilnya di Belitung.'
        ]);

        Author::create([
            'name' => 'Ahmad Fuadi',
            'photo' => 'ahmad_fuadi.jpg',
            'bio' => 'Ahmad Fuadi adalah penulis trilogi "Negeri 5 Menara", terinspirasi dari pengalamannya di pesantren dan luar negeri.'
        ]);

        Author::create([
           'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Tere Liye adalah penulis produktif asal Indonesia yang terkenal lewat seri novel "Bumi", "Pulang", dan lainnya.'
        ]);

        Author::create([
           'name' => 'Habiburrahman El Shirazy',
            'photo' => 'habiburrahman.jpg',
            'bio' => 'Habiburrahman El Shirazy adalah penulis novel islami populer, seperti "Ayat-Ayat Cinta" dan "Ketika Cinta Bertasbih".'
        ]);

        Author::create([
            'name' => 'Pidi Baiq',
            'photo' => 'pidi_baiq.jpg',
            'bio' => 'Pidi Baiq adalah seniman multitalenta yang dikenal sebagai penulis novel "Dilan: Dia adalah Dilanku Tahun 1990".'
        ]);
    }
}

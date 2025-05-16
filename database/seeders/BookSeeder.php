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
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif anak-anak dari Belitung yang berjuang meraih pendidikan.',
            'price' => '85000',
            'stock' => '10',
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => '2',
            'author_id' => '1'
        ]);

        Book::create([
            'title' => 'Negeri 5 Menara',
            'description' => 'Perjalanan penuh semangat santri di pesantren modern dengan mimpi besar.',
            'price' => '90000',
            'stock' => '8',
            'cover_photo' => 'negeri_5_menara.jpg',
            'genre_id' => '2',
            'author_id' => '2'
        ]);

        Book::create([
            'title' => 'Bumi',
            'description' => 'Novel fiksi fantasi karya Tere Liye dengan petualangan di dunia paralel.',
            'price' => '75000',
            'stock' => '15',
            'cover_photo' => 'bumi.jpg',
            'genre_id' => '1',
            'author_id' => '3'
        ]);

        Book::create([
            'title' => 'Ayat-Ayat Cinta',
            'description' => 'Novel religi-romantis berlatar kehidupan mahasiswa Indonesia di Mesir.',
            'price' => '95000',
            'stock' => '5',
            'cover_photo' => 'ayat_ayat_cinta.jpg',
            'genre_id' => '4',
            'author_id' => '4'
        ]);

        Book::create([
            'title' => 'Dilan: Dia adalah Dilanku Tahun 1990',
            'description' => 'Kisah cinta remaja antara Dilan dan Milea di era 90-an.',
            'price' => '80000',
            'stock' => '20',
            'cover_photo' => 'dilan_1990.jpg',
            'genre_id' => '4',
            'author_id' => '5'
        ]);

    }
}

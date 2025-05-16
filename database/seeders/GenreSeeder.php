<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'fiction',
            'description' => 'A literary work based on the imagination and necessarily on fact.'
        ]);

        Genre::create([
            'name' => 'non-fiction',
            'description' => 'Prose writing that is based on facts, real events, and real people'
        ]);

        Genre::create([
            'name' => 'fantasy',
            'description' => 'A genre of speculative fiction involving magical elements and fantastical worlds'
        ]);

        Genre::create([
            'name' => 'romance',
            'description' => 'A genre centered on love stories and relationships'
        ]);

        Genre::create([
            'name' => 'mystery',
            'description' => 'A genre involving suspenseful, mysterious events often centered on solving a crime or uncovering secrets'
        ]);
    }
}

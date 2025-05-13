<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => '1',
            'name' => 'fiction',
            'description' => 'A literary work based on the imagination and necessarily on fact'
        ],
        [
            'id' => '2',
            'name' => 'non-fiction',
            'description' => 'Prose writing that is based on facts, real events, and real people'
        ],
        [
            'id' => '3',
            'name' => 'fantasy',
            'description' => 'A genre of speculative fiction involving magical elements and fantastical worlds'
        ],
        [
            'id' => '4',
            'name' => 'romance',
            'description' => 'A genre centered on love stories and relationships'
        ],
        [
            'id' => '5',
            'name' => 'mystery',
            'description' => 'A genre involving suspenseful, mysterious events often centered on solving a crime or uncovering secrets'
        ]
];

    public function getGenres(){
    return $this->genres;  
}
}
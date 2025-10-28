<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Author::factory(5)->create()->each(function ($author) {
            Book::factory(rand(1, 3))->create(['author_id' => $author->id]);
        });
    }
}
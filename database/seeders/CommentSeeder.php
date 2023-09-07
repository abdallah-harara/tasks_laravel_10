<?php

namespace Database\Seeders;

use App\Models\comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Comment::factory(100)->create();
    }
}

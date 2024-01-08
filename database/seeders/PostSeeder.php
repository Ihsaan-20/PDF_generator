<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=20; $i++)
        {
            Post::create([
                'title' => 'Title ' . $i,
                'content' => 'Content of post ' . $i,
            ]);
        }
    }
}

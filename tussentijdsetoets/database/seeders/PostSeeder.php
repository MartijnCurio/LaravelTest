<?php
namespace Database\Seeders;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->subject = 'Hello World';
        $post->content = 'This is my first post.';
        $post->save();
    }
}
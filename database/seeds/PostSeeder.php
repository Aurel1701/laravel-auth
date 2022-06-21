<?php
use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = config('db.posts');
        foreach ($posts as $post) {
            $new_post = new Post();
            $new_post->title = $post['title'];
            $new_post->cover = $post['title'];
            $new_post->excerpt = $post['title'];
            $new_post->author = $post['title'];
            $new_post->body = $post['title'];
            $new_post->save();
        }
    }
}

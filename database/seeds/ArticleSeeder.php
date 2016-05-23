<?php

use Illuminate\Database\Seeder;
use Lifetutor\Article;
use Lifetutor\Post;
use Lifetutor\Video;
use Lifetutor\Youtube;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'post_id' => 3,
                'data' => [
                    'text' => ''
                ]
            ]
        ];

        foreach($articles as $article)
        {
            $post = Post::findOrFail($article['post_id']);
            $art = Article::create($article['data']);

            $post->content_id = $art->id;
            $post->content_type = 'Lifetutor\\Article';
            $post->save();
        }
    }
}

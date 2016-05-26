<?php

use Illuminate\Database\Seeder;
use Lifetutor\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Bewerbung schreiben',
                'description' => 'Der Weg zu erfolgreichen Bewerbung',
                'topic_id' => 1
            ],
            [
                'title' => 'Daten sammeln',
                'description' => 'Welche Daten brauchst du um die Formulare auszufüllen',
                'topic_id' => 2
            ],
            [
                'title' => 'Formulare finden',
                'description' => 'Welche Formulare musst du ausfüllen',
                'topic_id' => 2
            ],
            [
                'title' => 'Ultimate Course',
                'description' => 'Fuck yeah! I\'m a course!',
                'topic_id' => 2
            ]
        ];

        foreach($posts as $post)
        {
            Post::create($post);
        }
    }
}

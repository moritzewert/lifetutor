<?php

use Illuminate\Database\Seeder;
use Lifetutor\Category;
use Lifetutor\Comment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'title' => 'Super!',
                'text' => 'Vielen Dank! Das hat mir echt viel Stress erspart',
                'author_id' => 1,
                'post_id' => 1
            ],
            [
                'title' => 'Cool',
                'text' => 'Das hätte ich letzte Woche gebraucht',
                'author_id' => 1,
                'post_id' => 1
            ],
            [
                'title' => 'Nice!',
                'text' => 'Super Anleitung',
                'author_id' => 1,
                'post_id' => 2
            ],
            [
                'title' => 'Fehler',
                'text' => 'Ihr habt im dritten Absatz einen Fehler eingebaut ;)',
                'author_id' => 1,
                'post_id' => 3
            ],
            [
                'title' => 'Video?',
                'text' => 'Macht ihr mal ein Video zu diesem anderen Thema?',
                'author_id' => 1,
                'post_id' => 3
            ],
            [
                'title' => 'Naja',
                'text' => 'Fand ich jetzt nur so middle hilfreich',
                'author_id' => 1,
                'post_id' => 4
            ]
        ];

        foreach($comments as $comment)
        {
            Comment::create($comment);
        }
    }
}

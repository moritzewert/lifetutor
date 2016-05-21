<?php

use Illuminate\Database\Seeder;
use Lifetutor\Topic;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = [
            [
                'title' => 'Einschreiben',
                'description' => 'Wie finde ich die passende Uni und wie bewerbe ich mich richtig?',
                'category_id' => 2
            ],
            [
                'title' => 'Bafög beantragen',
                'description' => 'Wie komme ich an Geld?',
                'category_id' => 2
            ]
        ];

        foreach($topics as $topic)
        {
            Topic::create($topic);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Lifetutor\Course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'title' => 'Bewerbung 101',
                'description' => 'Der Weg zu erfolgreichen Bewerbung',
                'topic_id' => 1
            ]
        ];

        foreach($courses as $course)
        {
            Course::create($course);
        }
    }
}

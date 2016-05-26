<?php

use Illuminate\Database\Seeder;
use Lifetutor\Course;
use Lifetutor\Post;

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
            $course = Course::create($course);
            $post = Post::findOrFail(4);
            $post->content_id = $course->id;
            $post->content_type = get_class($course);
            $post->save();
            $i = 1;
            foreach(Post::where('id', '!=', 4)->get() as $post)
            {
                $course->posts()->attach($post, ['order' => $i]);
                $i++;
            }
        }
    }
}

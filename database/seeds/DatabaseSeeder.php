<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(TopicsSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(YoutubeSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use Lifetutor\Post;
use Lifetutor\Video;
use Lifetutor\Youtube;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            [
                'post_id' => 1,
                'data' => [
                    'video_id' => 'yUhnwmvSFb0'
                ]
            ],
            [
                'post_id' => 2,
                'data' => [
                    'video_id' => 'yUhnwmvSFb0'
                ]
            ]
        ];

        foreach($videos as $video)
        {
            $post = Post::findOrFail($video['post_id']);
            $yt = Youtube::create($video['data']);
            $vid = new Video();
            $vid->video_id = $yt->id;
            $vid->video_type = 'Lifetutor\\Youtube';
            $vid->save();

            $post->content_id = $vid->id;
            $post->content_type = 'Lifetutor\\Video';
            $post->save();
        }
    }
}

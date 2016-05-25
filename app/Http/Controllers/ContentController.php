<?php

namespace Lifetutor\Http\Controllers;

use Illuminate\Http\Request;

use Lifetutor\Category;
use Lifetutor\Course;
use Lifetutor\Http\Requests;
use Lifetutor\Post;
use Lifetutor\Topic;

class ContentController extends Controller
{
    public function browse(Request $request)
    {
        $context = null;
        $categories = Category::all();
        if($request->has('topic'))
        {
            $context = Topic::findOrFail($request->get('topic'));
            $base = $context->posts();
        }
        elseif($request->has('category'))
        {
            $context = Category::findOrFail($request->get('category'));
            $base = $context->posts();
        }
        else
        {
            $base = Post::where('id', '>', 0);
        }

        $hide = [];
        $filterActions = [];
        if($request->get('articles', 'show') == 'hide')
        {
            $hide[] = 'articles';
            $base = $base->hideType('articles');
            $filterActions['articles'] = $request->all();
            $filterActions['articles']['articles'] = 'show';
        }
        else
        {
            $filterActions['articles'] = $request->all();
            $filterActions['articles']['articles'] = 'hide';
        }
        if($request->get('courses', 'show') == 'hide')
        {
            $hide[] = 'courses';
            $base = $base->hideType('courses');
            $filterActions['courses'] = $request->all();
            $filterActions['courses']['courses'] = 'show';
        }
        else
        {
            $filterActions['courses'] = $request->all();
            $filterActions['courses']['courses'] = 'hide';
        }
        if($request->get('videos', 'show') == 'hide')
        {
            $hide[] = 'videos';
            $base = $base->hideType('videos');
            $filterActions['videos'] = $request->all();
            $filterActions['videos']['videos'] = 'show';
        }
        else
        {
            $filterActions['videos'] = $request->all();
            $filterActions['videos']['videos'] = 'hide';
        }
        $filterActions['current'] = $request->only('articles', 'courses', 'videos');
        $result = $base->get();
        return view('browse')
            ->with('context', $context)
            ->with('categories', $categories)
            ->with('result', $result)
            ->with('hide', $hide)
            ->with('filterActions', $filterActions);
    }

    public function show(Request $request, $post_id)
    {
        $post = Post::findOrFail($post_id);

        if(get_class($post->content) == Course::class)
        {
            return $this->course($post, $request->get('lesson', 1));
        }
        else
        {
            return $this->post($post);
        }
    }

    private function post(Post $post)
    {
        return view('post')->with('post', $post);
    }

    private function course(Post $post, $lesson = 1)
    {
        $lesson = $post->content->posts()->where('order', $lesson)->first();
        $lessons = $post->content->posts()->orderBy('order')->get();

        return view('course')
            ->with('course', $post)
            ->with('current', $lesson)
            ->with('lessons', $lessons);
    }
}

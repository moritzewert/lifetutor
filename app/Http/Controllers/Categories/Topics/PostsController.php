<?php

namespace Lifetutor\Http\Controllers\Categories\Topics;

use Illuminate\Http\Request;

use Lifetutor\Category;
use Lifetutor\Http\Controllers\Controller;
use Lifetutor\Http\Requests;
use Lifetutor\Topic;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $category_id, $topic_id)
    {
        $category = Category::findOrFail($category_id);
        $topic = $category->topics()->findOrFail($topic_id);
        $posts = $topic->posts;

        return view('categories.topics.posts.index')
            ->with('category', $category)
            ->with('topic', $topic)
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $category_id, $topic_id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $category_id, $topic_id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $category_id, $topic_id, $post_id)
    {
        $category = Category::findOrFail($category_id);
        $topic = $category->topics()->findOrFail($topic_id);
        $post = $topic->posts()->findOrFail($post_id);

        return view('categories.topics.posts.show')
            ->with('category', $category)
            ->with('topic', $topic)
            ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $category_id, $topic_id, $post_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id, $topic_id, $post_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $category_id, $topic_id, $post_id)
    {
        //
    }
}

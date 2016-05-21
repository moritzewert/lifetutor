<?php

namespace Lifetutor\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Lifetutor\Post;
use Lifetutor\User;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show(User $user, Post $post)
    {
        return true;
    }

    public function create(User $user, Post $post)
    {
        return true;
    }

    public function store(User $user, Post $post)
    {
        return true;
    }

    public function edit(User $user, Post $post)
    {
        return true;
    }

    public function update(User $user, Post $post)
    {
        return true;
    }

    public function delete(User $user, Post $post)
    {
        return true;
    }
}

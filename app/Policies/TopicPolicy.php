<?php

namespace Lifetutor\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Lifetutor\Topic;

class TopicPolicy
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

    public function show(User $user, Topic $topic)
    {
        return true;
    }

    public function create(User $user, Topic $topic)
    {
        return true;
    }

    public function store(User $user, Topic $topic)
    {
        return true;
    }

    public function edit(User $user, Topic $topic)
    {
        return true;
    }

    public function update(User $user, Topic $topic)
    {
        return true;
    }

    public function delete(User $user, Topic $topic)
    {
        return true;
    }
}

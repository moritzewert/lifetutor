<?php

namespace Lifetutor\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Lifetutor\User;

class UserPolicy
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

    public function show(User $user, User $user2)
    {
        return true;
    }

    public function create(User $user, User $user2)
    {
        return true;
    }

    public function store(User $user, User $user2)
    {
        return true;
    }

    public function edit(User $user, User $user2)
    {
        return true;
    }

    public function update(User $user, User $user2)
    {
        return true;
    }

    public function delete(User $user, User $user2)
    {
        return true;
    }
}

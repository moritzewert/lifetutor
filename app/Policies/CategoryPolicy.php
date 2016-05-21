<?php

namespace Lifetutor\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Lifetutor\Category;
use Lifetutor\User;

class CategoryPolicy
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

    public function show(User $user, Category $category)
    {
        return true;
    }

    public function create(User $user, Category $category)
    {
        return true;
    }

    public function store(User $user, Category $category)
    {
        return true;
    }

    public function edit(User $user, Category $category)
    {
        return true;
    }

    public function update(User $user, Category $category)
    {
        return true;
    }

    public function delete(User $user, Category $category)
    {
        return true;
    }
}

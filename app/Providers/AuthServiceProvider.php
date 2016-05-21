<?php

namespace Lifetutor\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Lifetutor\Category;
use Lifetutor\Policies\CategoryPolicy;
use Lifetutor\Policies\PostPolicy;
use Lifetutor\Policies\TopicPolicy;
use Lifetutor\Policies\UserPolicy;
use Lifetutor\Post;
use Lifetutor\Topic;
use Lifetutor\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Post::class => PostPolicy::class,
        Topic::class => TopicPolicy::class,
        Category::class => CategoryPolicy::class
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}

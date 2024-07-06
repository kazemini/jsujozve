<?php

namespace App\Providers;

use App\Models\Document;
use App\Models\Forum;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('manage-document', function (User $user, Document $document) {
            return $user->id === $document->author_id;
        });

        Gate::define('manage-forum', function (User $user, Forum $forum) {
            return $user->id === $forum->admin_id;
        });

        Gate::define('manage-post', function (User $user, Forum $forum, Post $post) {
            return $user->id === $forum->admin_id && $post->forum_id === $forum->id;
        });

        Gate::define('subscribe', function (User $user, Forum $forum) {
            return $user->id !== $forum->admin_id;
        });
    }
}

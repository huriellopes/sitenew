<?php

namespace App\Providers;

use App\Interfaces\Comment\CommentRepositoryInterface;
use App\Interfaces\Comment\CommentServiceInterface;
use App\Interfaces\Marketing\MarketingRepositoryInterface;
use App\Interfaces\Marketing\MarketingServiceInterface;
use App\Interfaces\Nivels\NivelsRepositoryInterface;
use App\Interfaces\Nivels\NivelsServiceInterface;
use App\Interfaces\Post\PostRepositoryInterface;
use App\Interfaces\Post\PostServiceInterface;
use App\Interfaces\Site\SiteServiceInterface;
use App\Interfaces\UserComment\UserCommentRepositoryInterface;
use App\Interfaces\UserComment\UserCommentServiceInterface;
use App\Interfaces\Users\UsersRepositoryInterface;
use App\Interfaces\Users\UsersServiceInterface;
use App\Repository\Comment\CommentRepository;
use App\Repository\Marketing\MarketingRepository;
use App\Repository\Nivels\NivelsRepository;
use App\Repository\Post\PostRepository;
use App\Repository\UserComment\UserCommentRepository;
use App\Repository\Users\UsersRepository;
use App\Services\Marketing\MarketingService;
use App\Services\Nivels\NivelsService;
use App\Services\Post\PostService;
use App\Services\Site\SiteService;
use App\Services\UserComment\UserCommentService;
use App\Services\Users\UsersService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            NivelsRepositoryInterface::class,
            NivelsRepository::class
        );

        $this->app->singleton(
            NivelsServiceInterface::class,
            NivelsService::class
        );

        $this->app->singleton(
            UsersRepositoryInterface::class,
            UsersRepository::class
        );

        $this->app->singleton(
            UsersServiceInterface::class,
            UsersService::class
        );

        $this->app->singleton(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );

        $this->app->singleton(
            CommentServiceInterface::class,
            CommentService::class
        );

        $this->app->singleton(
            MarketingRepositoryInterface::class,
            MarketingRepository::class
        );

        $this->app->singleton(
            MarketingServiceInterface::class,
            MarketingService::class
        );

        $this->app->singleton(
            SiteServiceInterface::class,
            SiteService::class
        );

        $this->app->singleton(
            PostRepositoryInterface::class,
            PostRepository::class
        );

        $this->app->singleton(
            PostServiceInterface::class,
            PostService::class
        );

        $this->app->singleton(
            UserCommentRepositoryInterface::class,
            UserCommentRepository::class
        );

        $this->app->singleton(
            UserCommentServiceInterface::class,
            UserCommentService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env("APP_ENV") == "production") {
            \URL::forceScheme('https');
        }
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ChatGpt\ChatGptService;

class ChatGptServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ChatGptService::class, function ($app) {
            return new ChatGptService(config('services.chatgpt'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

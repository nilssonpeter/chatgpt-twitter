<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\DataObjects\ChatGptPost;
use App\DataFactories\PostFactory;
use App\Services\ChatGpt\ChatGptService;

class ChatGptCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:chat-gpt-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate post';

    /**
     * Execute the console command.
     */
    public function handle(ChatGptService $chatGptService): void
    {
        $post = $chatGptService->getPost(config('chatgtp.default_post'));
        (new PostFactory(new ChatGptPost($post)))->make();
    }
}

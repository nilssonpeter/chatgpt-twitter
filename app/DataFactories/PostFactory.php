<?php

namespace App\DataFactories;

use App\DataObjects\ChatGptPost;
use App\Models\Post;

class PostFactory
{
    protected ChatGptPost $chatGptPost;

    public function __construct(ChatGptPost $chatGptPost)
    {
        $this->chatGptPost = $chatGptPost;
    }

    public function make(): ?Post
    {
        $post = Post::firstOrCreate(['import_id' => $this->chatGptPost->import_id]);
        
        $post->content = $this->chatGptPost->content;
        
        $post->save();
        
        return $post;
    }
}

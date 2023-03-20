<?php

namespace App\View\Components;

use App\Models\Post as PostModel;
use Illuminate\View\Component;

class Post extends Component
{
    public function __construct(
        public PostModel $post,
    ) {
    }
    
    public function render()
    {
        return view('components.post');
    }

    public function shouldRender(): bool
    {
        return !is_null($this->post);
    }
}

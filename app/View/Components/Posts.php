<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Posts extends Component
{
    public function __construct(
        public Collection $posts,
    ) {
    }
    
    public function render()
    {
        return view('components.posts');
    }

    public function shouldRender(): bool
    {
        return $this->posts->count();
    }
}

<?php

namespace App\DataObjects;

class ChatGptPost
{
    public string $content;
    public string $import_id;

    public function __construct(object $data)
    {
        $this->content = $data->choices[0]->message->content;
        $this->import_id = $data->id;
    }
}

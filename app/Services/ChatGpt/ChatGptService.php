<?php

namespace App\Services\ChatGpt;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class ChatGptService
{
    protected array $config;
    protected Client $client;

    public function __construct(array $config)
    {
        $this->config = $config;

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->config['api_key'],
            ],
            'base_uri' => $this->config['endpoint'],
        ];

        $this->client = new Client($options);
    }

    public function getPost(string $post)
    {
        $options = [
            'model' => $this->config['model'],
            'messages' => [['role' => 'user', 'content' => $post]],
        ];
        $response = $this->client->post('/v1/chat/completions', ['body' => json_encode($options)]);

        return $this->formatResponse($response);
    }

    protected function formatResponse(ResponseInterface $responseInterface): object
    {
        return json_decode($responseInterface->getBody()->getContents());
    }
}

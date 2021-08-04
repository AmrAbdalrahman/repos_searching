<?php

/**
 * @param string $path
 * @param array $body
 * @param array $headers
 * @return mixed|null
 * @throws \GuzzleHttp\Exception\GuzzleException
 */
function getEndpoint(string $path, array $body = [], array $headers = [])
{
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', $path, [
        'http_errors' => null,
        'headers' => $headers + [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
        \GuzzleHttp\RequestOptions::JSON => $body,
    ]);
    return is_null($response->getBody()) ? null : json_decode($response->getBody(), true);
}








<?php
require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);
// Send a request 
$response = $client->get('posts/1');

// var_dump($response->getBody())
echo $response->getBody();
$response = $client->get('comments/2');

// var_dump($response->getBody())
echo $response->getBody();
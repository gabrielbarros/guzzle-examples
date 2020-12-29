<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$binary = file_get_contents('image1.png');

$url = 'http://localhost/sandbox/http-test.php';

try {
    $response = $client->post($url, [
        'body' => $binary,
        'headers' => [
            'Content-Type' => 'image/png'
        ]
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

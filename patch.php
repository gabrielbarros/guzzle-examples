<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/http-request/index.php';

try {
    $response = $client->patch($url, [
        'form_params' => [
            'name' => 'Paul',
            'age' => '20'
        ],
        'query' => [
            'id' => '88900'
        ]
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

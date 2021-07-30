<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/http-request/index.php';

try {
    $response = $client->post($url, [
        'json' => [
            'value_1' => 'Something, anything',
            'test' => 'another text',
            'chars' => 'áéíóúàèìòùâãôõçäëïöüÿý'
        ]
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

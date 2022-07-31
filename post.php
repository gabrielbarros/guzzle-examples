<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/sandbox/http-request/index.php';

try {
    $response = $client->post($url, [
        'form_params' => [
            'value_1' => 'Something, anything',
            'test' => 'another text',
            'chars' => 'áéíóúàèìòùâãôõçäëïöüÿý'
        ],
        'query' => [
            'zum' => 'zim',
            'lala' => 'lo lo'
        ]
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

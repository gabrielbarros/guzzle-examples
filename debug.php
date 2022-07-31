<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/sandbox/http-request/index.php';

try {
    $response = $client->get($url, [
        'debug' => true
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

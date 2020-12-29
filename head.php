<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/sandbox/http-test.php';

try {
    $response = $client->head($url);

    header('Content-Type: text/plain');
    print_r($response->getHeaders());
}
catch (Exception $e) {
    // ...
}

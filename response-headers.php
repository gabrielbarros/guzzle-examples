<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/http-request/index.php';

try {
    $response = $client->get($url);

    header('Content-Type: text/plain');
    print_r($response->getHeaders());
}
catch (Exception $e) {
    // ...
}

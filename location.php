<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'https://google.com';

try {
    $response = $client->get($url, [
        'allow_redirects' => false
    ]);

    header('Content-Type: text/plain');
    echo $response->getHeaders()['Location'][0];
}
catch (Exception $e) {
    // ...
}

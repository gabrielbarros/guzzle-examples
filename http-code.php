<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/http-request/index.php';

try {
    $response = $client->get($url);

    header('Content-Type: text/plain');
    echo ($response->getStatusCode());
}
catch (Exception $e) {
    // for 404, 403, 500, etc.: $e->getResponse()->getStatusCode()
}

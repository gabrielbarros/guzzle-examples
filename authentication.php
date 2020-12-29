<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$user = 'admin';
$password = '12345';

$client = new Client();

$url = 'http://localhost/sandbox/http-test.php';

try {
    $response = $client->get($url, [
        'auth' => [$user, $password]
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

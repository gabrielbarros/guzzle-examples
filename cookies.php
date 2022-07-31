<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;

$client = new Client();

$url = 'http://localhost/sandbox/http-request/index.php';

$domain = 'localhost';

$cookieJar = CookieJar::fromArray([
    'name' => 'John Smith',
    'age' => '30',
    'role' => 'manager'
], $domain);

try {
    $response = $client->get($url, [
        'cookies' => $cookieJar
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

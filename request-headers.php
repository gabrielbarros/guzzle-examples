<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'http://localhost/http-request/index.php';

try {
    $response = $client->get($url, [
        'headers' => [
            'User-Agent' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
            'X-Authentication' => '698dc19d489c4e4db73e28a713eab07b',
            'X-Anything' => 'some header you want to send'
        ]
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();
}
catch (Exception $e) {
    // ...
}

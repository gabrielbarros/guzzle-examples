<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$image1 = fopen('image1.png', 'r');
$image2 = fopen('image2.png', 'r');

$url = 'http://localhost/sandbox/http-test.php';

try {
    $response = $client->post($url, [
        'multipart' => [
            [
                'name' => 'name',
                'contents' => 'Mario'
            ],
            [
                'name' => 'age',
                'contents' => '30'
            ],
            [
                'name' => 'image1',
                'contents' => $image1
            ],
            [
                'name' => 'image2',
                'contents' => $image2
            ]
        ]
    ]);

    header('Content-Type: text/plain');
    echo $response->getBody();

}
catch (Exception $e) {
    // ...
}

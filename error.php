<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$url = 'https://google281928182812819289.com';

try {
    $response = $client->get($url);
}
catch (Exception $e) {
    header('Content-Type: text/plain');
    echo $e->getMessage();
}

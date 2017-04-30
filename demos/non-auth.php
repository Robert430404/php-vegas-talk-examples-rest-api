<?php

use GuzzleHttp\Client;

$client = new Client([
	'base_uri' => 'http://localhost:8989',
	'timeout'  => 2.0,
]);

try {
	$response = $client->request('GET', '/api/v1/notes');

	echoLine('Success');
} catch (\Exception $e) {
	echoLine('You Are Unarthorized: 401 Returned');
}
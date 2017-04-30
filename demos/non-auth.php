<?php

use GuzzleHttp\Client;

$client = new Client([
	'base_uri' => 'http://localhost:8989',
	'timeout'  => 2.0,
]);

try {
	$response = $client->request('GET', '/api/v1/notes');

	outputLine('Success');
} catch (\Exception $e) {
	outputLine('You Are Unarthorized: 401 Returned');
}
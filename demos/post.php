<?php

use GuzzleHttp\Client;

$client = new Client([
	'base_uri' => 'http://localhost:8989',
	'timeout'  => 2.0,
	'headers'  => [
		'api_key' => API_KEY
	],
]);

try {
	$response = $client->request('GET', '/api/v1/notes');
	$array    = json_decode($response->getBody());

	outputLine($array);
} catch (\Exception $e) {
	outputLine('You Are Unarthorized: 401 Returned');
}
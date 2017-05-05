<?php

use GuzzleHttp\Client;

$client = new Client([
	'base_uri'    => 'http://localhost:8989',
	'timeout'     => 2.0,
	'form_params' => [
		'name'    => 'CMD Line Note',
		'content' => 'This is the content from the command line note',
		'type'    => 1
	],
	'headers'     => [
		'api_key' => API_KEY
	],
]);

try {
	$response = $client->request('PUT', '/api/v1/notes');
	$array    = json_decode($response->getBody());

	outputLine($array);
} catch (\Exception $e) {
	outputLine('You Are Unarthorized: 401 Returned');
}
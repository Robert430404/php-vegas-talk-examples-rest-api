<?php

/**
 * 
 */
class Request
{
	/**
	 * @var string
	 */
	private $apikey;

	/**
	 * @var string
	 */
	private $url;

	/**
	 * Request Constructor
	 * 
	 * @param $apikey  string
	 * @param $url     string
	 * @param $options array
	 */
	public function __construct(
		string $apikey,
		string $url,
		array  $options
	) {
		$this->apikey = $apikey;
	}

	public function sendRequest()
	{

	}

	private function setupCurl()
	{

	}
}
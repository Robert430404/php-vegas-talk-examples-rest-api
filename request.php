<?php

/**
 * This class is responsible for sending the requests to the api.
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
	 * @var array
	 */
	private $options;

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
		$this->apikey  = $apikey;
		$this->url     = $url;
		$this->options = $options;
	}

	public function sendRequest()
	{

	}
}
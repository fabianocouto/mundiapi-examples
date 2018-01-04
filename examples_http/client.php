<?php

const BASIC_AUTH_USER = null;
const BASIC_AUTH_PASS = null;

if (!is_dir(dirname(__FILE__) . '/../vendor')) {
	die ('Please, execute composer install.');
}

if (empty(BASIC_AUTH_USER)) {
	die ('Please, set basic auth user in ' . __FILE__);
}

function DumpData ($data)
{
	print '<pre>';
	print json_encode((array) $data);
	print '</pre>';
}

require dirname(__FILE__).'/../vendor/autoload.php';

use GuzzleHttp\Promisse;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;

$client = new Client([
	'base_uri' => 'https://api.mundipagg.com/core/v1/',
	'auth' 	   => [BASIC_AUTH_USER, BASIC_AUTH_PASS]
]);
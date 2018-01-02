<?php

const BASIC_AUTH_USER = 'sk_test_id';
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

$client = new MundiAPILib\MundiAPIClient(BASIC_AUTH_USER, BASIC_AUTH_PASS);
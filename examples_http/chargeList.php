<?php

require ('client.php');

try {

	$query = [
		'code' 			 => null, // Integration code
		'status' 		 => null, // pending, paid, canceled, processing, failed, overpaid ou underpaid
		'payment_method' => null, // credit_card, boleto, bank_transfer, safetypay ou voucher
		'customer_id' 	 => null,
		'order_id' 		 => null,
		'created_since'  => null, // Date or DateTime string
		'created_until'  => null, // Date or DateTime string
		'page' 			 => 1,
		'size' 			 => 10,
	];

	$response = $client->request('GET', 'charges', ['query' => $query]);

	$result = json_decode($response->getBody());

	DumpData($result);

} catch (Exception $e) {

	DumpData($e);
}
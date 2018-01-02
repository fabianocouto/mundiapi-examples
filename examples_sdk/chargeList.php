<?php

require ('client.php');

try {

	$charges = $client->getCharges();

	$result = $charges->getCharges(
		null /* page number */,
		null /* page size */,
		null /* filter by code (integration code) */,
		null /* filter by status */,
		null /* filter by payment method */,
		null /* filter by customer id */,
		null /* filter by order id */,
		null /* filter by date from */,
		null /* filter by date to */
	);

	DumpData($result);

} catch (Exception $e) {

	DumpData($e);
}
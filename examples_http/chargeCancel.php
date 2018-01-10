<?php

require ('client.php');

try {

	$chargeId = 'ch_id';

	$response = $client->request('DELETE', 'charges/'.$chargeId);

	$result = json_decode($response->getBody());

	DumpData($result);

} catch (Exception $e) {

	DumpData($e);
}

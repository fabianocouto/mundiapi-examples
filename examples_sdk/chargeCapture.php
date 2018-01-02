<?php

require ('client.php');

try {

	$charges = $client->getCharges();

	$result = $charges->captureCharge('ch_id');

	DumpData($result);

} catch (Exception $e) {

	DumpData($e);
}
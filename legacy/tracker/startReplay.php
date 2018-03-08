<?php

set_time_limit(0);

$hostPush = 'push.master.time-team.nl';
$hostPull = 'api.master.time-team.nl';

$username = "roeivierkamp";
$password = "C47FG5MxUdJR7MmZ";

$start = microtime(true);

$speed = 20;

$fpPull = fsockopen($hostPull, 80, $errno, $errstr, 30);
if (!$fpPull) {
	echo "$errstr ($errno)<br />n";
} else {
	$request 	= "GET /2/replay.json?regatta_id=29&heat_id=1&speed=".$speed." HTTP/1.1\r\n";
	$request .= "Host: ".$hostPull."\r\n";
	$request .= "User-Agent: ScreenTracker v1\r\n";
	$request .= "Authorization: Basic " . base64_encode("$username:$password")."\r\n";
	$request .= "\r\n";
	fwrite($fpPull, $request);
	while (!feof($fpPull)) {
		echo fgets($fpPull, 128);
	}
	fclose($fpPull);
}
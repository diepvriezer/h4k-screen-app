<?php

set_time_limit(60);

$username = "roeivierkamp";
$password = "C47FG5MxUdJR7MmZ"; 

function contains($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}

$url = $_GET['url'];
$parts = parse_url($url);
$host = $parts['host'];
$port = isset($parts['port']) ? $parts['port'] : 80;
$pathQuery = $parts['path'] . '?' . $parts['query'];
$BUFSIZE = 1024;

$sock = fsockopen($host, $port, $errno, $errstr, 30);
if (!$sock) {
	http_response_code(500);
} else {
	header_remove();
	$request  = "GET ".$pathQuery." HTTP/1.0\r\n";
	$request .= "Host: ".$host."\r\n";
	$request .= "User-Agent: ScreenTracker v1\r\n";
	$request .= "Authorization: Basic " . base64_encode("$username:$password")."\r\n";
	$request .= "\r\n";
	fwrite($sock, $request);

	$had_headers = FALSE;
	$msg = '';
	while (!feof($sock)) {
		if (!$had_headers) {
			$msg .= fgets($sock, $BUFSIZE);
			if (contains("\r\n\r\n", $msg)) {
				$parts = explode("\r\n\r\n", $msg);
				$headers = array_shift($parts);

				// send headers.
				foreach(explode("\r\n", $headers) as $header) {
					$header = trim($header);
					if ($header) header($header);
				}

				// set body.
				$msg = implode("\r\n\r\n", $parts);
				$had_headers = TRUE;
				echo $msg;
			}
		} else {
			echo fgets($sock, $BUFSIZE);
			
		}
		flush();
	    ob_flush();
		usleep(50);
	}
	fclose($sock);
}
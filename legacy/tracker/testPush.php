<?php

error_reporting(E_ALL);

/* Allow the script to hang around waiting for connections. */
set_time_limit(30);

$hostPush = 'push.master.time-team.nl';
$hostPull = 'api.master.time-team.nl';
$username = "roeivierkamp";
$password = "C47FG5MxUdJR7MmZ";

$start = microtime(true);

// Start the call
echo "Start = ".(microtime(true) - $start)."<br />";
curl_post_async("http://roeivierkamp.com:8080/tracker/startReplay.php", array());
echo "Finish = ".(microtime(true) - $start)."<br />";

$fpPush = fsockopen($hostPush, 80, $errno, $errstr, 30); 
if (!$fpPush) 
{
    echo "$errstr ($errno)<br />n";
} 
else
{	
	//Send data
	$request 	= "GET /2/screenclient/http/roeivierkamp-heat-json/roeivierkamp-timing-json/roeivierkamp-race-json HTTP/1.1\r\n";
	$request .= "Host: ".$hostPush."\r\n";
	$request .= "User-Agent: ScreenTracker v1\r\n";
	$request .= "Authorization: Basic " . base64_encode("$username:$password")."\r\n";
	$request .= "\r\n";
	fwrite($fpPush, $request);
	$i = 0;
	while (microtime(true) - $start < 10) {
		//echo "main - ".(microtime(true) - $start)."<br />";
		if (!feof($fpPush))
			$message .= fgets($fpPush, 128);
		//echo $message."<br />";
		if (isJson($message)) {
			print("<pre>");
			print_r(json_decode($message));
			print("</pre>");
			$message = "";
			$i = 0;
		} else {
			$i++;
			if ($i > 5)
				$message = "";
		}
		usleep(1000);
	}
	/*while (!feof($fpPush) && microtime(true) - $start < 10) {
		echo "<br />";
		echo fgets($fpPush, 128);
		//$i++;
	}*/
	 
	fclose($fpPush);
}



function getData($request) {
	$apiHost = "http://api.master.time-team.nl";
	
	$username = "otis";
	$password = "WpzsMYqFVDAWgAsw1nfIm6p5";
	
	$remote_url = $apiHost.$request;
	$opts = array(
  	'http'=>array(
	    'method'=>"GET",
	    'header' => "Authorization: Basic " . base64_encode("$username:$password")                 
	  )
	);

	$context = stream_context_create($opts);

	// Open the file using the HTTP headers set above
	$file = file_get_contents($remote_url, false, $context);
	return json_decode($file);
}

function curl_post_async($url)
{
    $post_string = "";

    $parts=parse_url($url);

    $fp = fsockopen($parts['host'],
        isset($parts['port'])?$parts['port']:80,
        $errno, $errstr, 30);

    $out = "POST ".$parts['path']." HTTP/1.1\r\n";
    $out.= "Host: ".$parts['host']."\r\n";
    $out.= "Content-Type: application/x-www-form-urlencoded\r\n";
    $out.= "Content-Length: ".strlen($post_string)."\r\n";
    $out.= "Connection: Close\r\n\r\n";
    if (isset($post_string)) $out.= $post_string;

    fwrite($fp, $out);
    fclose($fp);
}

function isJson($string) {
	json_decode($string);
	return (json_last_error() == JSON_ERROR_NONE);
}

?>
<?php

// Get year, default to current.
$year = $_GET['year'];
if (empty($year)) {
    $year = date("Y");
}
$page = $_GET['page'];
if (empty($page)) {
    $page = 'events.php';
}

$url = "https://regatta.time-team.nl/roeivierkamp/$year/entries/events.php";
$content = file_get_contents($url);
$content = str_replace('</title>','</title><base href="https://regatta.time-team.nl/roeivierkamp/' . $year . '/entries/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="https://roeivierkamp.com/regs/styles.css" /></head>', $content);

echo $content;
?>
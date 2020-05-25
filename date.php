<?php 
date_default_timezone_set('America/New_York');

$nextweek = time() + (7*24*60*60);

echo 'Now   ' . date('Y-m-d') . "<br>";
echo 'Next week ' .date('Y-m-d', $nextweek) . "<br>";

echo "===========<br>";

$now = new DateTime();
$nextweek = new DateTime('today +1 week ');
echo 'Now        ' . $now ->format('Y-m-d'). "<br>";
echo 'Next week  ' . $nextweek ->format('Y-m-d'). "<br>";

?>

<html>
    <head>
        <title> Date</title>
    </head>

    <body style="background: grey">

    </body>
</html>

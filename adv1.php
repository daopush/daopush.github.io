<?php

$time = date('jS \of F Y h:i:s A');
$source = ($_GET['source']) ? $_GET['source'] : "source ID undefined";
$campaign = ($_GET['campaign']) ? $_GET['campaign'] : "campaign ID undefined";
$wr=$time." Campaign ID:".$campaign." Source ID:".$source;

$fp = fopen('log.txt', 'a');
fwrite($fp, $wr . PHP_EOL);
fclose($fp);

header("Location: https://world.news-tap.com/748-koroleva-opozorilas-pered-vsej-rf-tarzan-dobil?type=full"); 
exit;

?>

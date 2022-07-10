<?php
$btime=$result['btime'];
$date = strtotime("$btime");
$remaining = $date - time();

$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$hours_remaining = $hours_remaining - 3;
$minutes_remaining = floor(($remaining % 3600) / 60);
$seconds_remaining = floor($remaining % 60);
echo "There are $days_remaining days and $hours_remaining hours $minutes_remaining minutes $seconds_remaining sec left";
?>
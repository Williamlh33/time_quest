<?php

$presentTime = new DateTime;
$destinationTime = new DateTime;

$presentTime->format('M d Y A h i'); 
$destinationTime->setDate(1850, 10, 30);
$destinationTime->setTime(17, 22);
$destinationTime->format('g A i');

$interval = $presentTime->diff($destinationTime);
echo $interval->format('%R %y years %m months %d days %h hours %i minutes');
$intervalDays = $interval->days;
echo $intervalDays;
$intervalMinute = $intervalDays * 1440;
$nbLitre = $intervalMinute / 10000;
echo $nbLitre;

 echo 'j\'ai pas fait le css : qu\'est ce que tu vas me faire hein ?';
<?php

setlocale(LC_TIME, 'NL_nl');
$hour = date("H");
$M = date("m");
echo '<br>het is vandaag '.(strftime("%d-%m-%Y "));
echo $hour.':'.$M.'<br>';

echo 'een week geleden was het '.date("d-m-Y",strtotime("-1 week")).'</br>'; //week geleden

$feb = new DateTime('2015-02-05');
$aug = new DateTime('2015-08-12');
echo $verschil = $feb->diff($aug)->format('%a dagen verschil<br>');

$verjaardag = strtotime('2016-06-01');
$vandaag = time();
$difference = $verjaardag - $vandaag;
echo 'Het duurt '.floor($difference / (60 * 60 * 24)).' voordat ik jarig ben';

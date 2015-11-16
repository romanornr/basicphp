<?php

$time = date("H");
$timezone = setlocale(LC_TIME, 'NL_nl');

if ($time < "12") {
        echo "goede morgen";
	}
if ($time >= "12" && $time < "17") {
        echo "Goede middag";
}else{
	echo "Goede avond";
	}
<?php
setlocale(LC_TIME, 'NL_nl');
//echo(strftime("%Y. %B %d. %A. %X %Z"));
echo '<br>het is vandaag '.(strftime("%d %B %Y"));
echo '<br>het is vandaag '.(strftime("%d/%m/%Y"));

if(strftime('%M') == 1){
echo '<br>het is nu '.(strftime("%I uur en %M minuut"));
}else{
	echo '<br>het is nu '.(strftime("%I uur en %M minuten"));
}
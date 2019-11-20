<?php

$getal = readline("een getal");
$antwoord = 1; 
$i = 1;
while ($i <= $getal) {
	$antwoord *= ++$i;
}
echo ($antwoord);
 ?>
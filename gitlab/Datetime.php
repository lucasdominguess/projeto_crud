<?php 


$date = new DateTime('now'); 
$date2 = new DateTime('now', new DateTimeZone('America/Sao_Paulo')); 
// print_r ($date); 

$date_br = $date->format('d/m/Y H:i:s' );
$date_br2 =$date2->format('d-m-Y'); 
print_r($date_br);
echo "\n";
print_r($date_br2);
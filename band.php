<?php 

$prijs["citizen of glass"]="4.5";
$prijs["night"]="9";
$prijs["new eyes"]="5";
$prijs["strange trails"]="10";
$sum=0;
print_r("het albumoverzicht: " . PHP_EOL);
foreach ($prijs as $key => $value) {
	print_r($key. " kost€ ". $value . PHP_EOL);
$sum +=$value;
print_r("het totaal is ".$sum);

}

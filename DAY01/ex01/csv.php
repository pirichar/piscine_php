<?php

$myfile = fopen("ex01.txt", "r") or die ("Unable to open file!");
while(!feof($myfile)){
	$line = fgets($myfile);
}
$array = explode(",", $line);
foreach($array as $element){
	printf("%s\n", $element);
}
fclose($myfile);
?>
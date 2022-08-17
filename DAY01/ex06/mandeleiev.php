<?php

//open txt folder
fclose(STDOUT);
$STDOUT = fopen("mendeleiev.html", "w+");
echo '<!DOCTYPE html>
<html>
<head>
	<title>Tableau periodique</title>
</head>
<body>
	<table style="width:100%;">
	<tr>';
$info = fopen("ex06.txt", "r") or die ("Unable to open file!");
/*
	I should probably split the line with ,
	NAME:then For the line[0] I split with spaces to keep $NAME[0]
	NUMBER: Split with : and keep $NUMBER[1]
	SMALL:	Split with : ; split again with " "  and keep second_split[1]
	MOLAR:	split with : and keep MOLAR[1]
	ELECTRON: split with : and keep ELECTRON[1]
*/
$ind = 0;
while(!feof($info)){
	$line = fgets($info);
	$s_line = explode(", ", $line);
	$NAME = explode(" ", $s_line[0]);
	$NUMBER = explode(":", $s_line[1]);
	$SMALL = explode(":", $s_line[2]);
	$SMALL2 = explode(" ", $SMALL[1]);
	$MOLAR = explode(":", $s_line[3]);
	$ELECTRON = explode(":", $s_line[4]);
	$ELECTRON1 = trim($ELECTRON[1], "\n");
	echo "
		<td id=\"$ind\"style=\"border: 1px solid black; padding:10px;\">
			<h4>$NAME[0]</h4>
    			<ul>
					<li>No $NUMBER[1]</li>
					<li>$SMALL2[1]</li>
					<Li> $MOLAR[1] </ li>
					<li>$ELECTRON1 electrons</li>
				<ul>
		</td>";
		$ind++;
		if ($ind == 2 || $ind == 10 || $ind == 18 || $ind == 36 || $ind == 54 || $ind == 86){
		echo "
	</tr>
	<tr>";}
}
echo '		

</table>
</body>
</html>
';
fclose($info);
?>


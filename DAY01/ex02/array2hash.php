<?php
	function array2hash($array){
		echo "Array\n(\n";
		foreach($array as $element)
			printf("    [%d] => %s\n", $element[1], $element[0]);
		echo ")\n";
	}

?>
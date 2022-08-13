<?php
	function array2hash_sorted($array){
		echo "Array\n(\n";
		krsort($array);
		foreach($array as $element)
			printf("    [%s] => %d\n", $element[0], $element[1]);
		echo ")\n";
	}

?>
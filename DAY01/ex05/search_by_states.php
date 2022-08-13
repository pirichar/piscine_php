<?php

// what is on the left side of it will have a corresponding value of what is on the right side
// This can be used to set values of any acceptable type into a corresponding index of an array. 
// The index can be associative (string based) or numeric.

function search_by_states($input){
	$states = [
		'Oregon' => 'OR',
	  'Alabama' => 'AL',
	  'New Jersey' => 'NJ',
	  'Colorado' => 'CO',
	  ];
	  //content=>val
	  $capitals = [
		'OR' => 'Salem',
	  'AL' =>  'Montgomery',
	  'NJ' => 'trenton',
	  'KS' => 'Topeka',
	  ];	
	$array = explode(", ", $input);
	foreach ($array as $splitted_in)
	{
		$first = false;
		$second = false;
		foreach ($states as $content=>$val){
			if ($states[$splitted_in])
			{
				echo "$capitals[$val] is the capitale of $splitted_in.\n";
				$first = true;
				break;
			}
		}
		if ($first == false)
		{
			foreach ($capitals as $content=>$val){
				if (strcmp($val, $splitted_in) == 0){
					foreach ($states as $content1=>$val1){
						if(strcmp($content, $val1) == 0){
							echo "$splitted_in is the capital of $content1.\n";
							$second = true;
							break;
						}
					}
				}
			}
		}
		if ($first == false && $second == false)
			echo "$splitted_in is neither a capital nor a state.\n";
	}
}
?>
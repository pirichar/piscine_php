<?php

// what is on the left side of it will have a corresponding value of what is on the right side
// This can be used to set values of any acceptable type into a corresponding index of an array. 
// The index can be associative (string based) or numeric.

function capital_city_from($input){
	$states = [
		'Oregon' => 'OR',
	  'Alabama' => 'AL',
	  'New Jersey' => 'NJ',
	  'Colorado' => 'CO',
	  ];

	  $capitals = [
		'OR' => 'Salem',
	  'AL' =>  'Montgomery',
	  'NJ' => 'trenton',
	  'KS' => 'Topeka',
	  ];	
	foreach ($states as $content=>$val){
		if ($states[$input])
		{
			echo "$capitals[$val]\n";
			return;
		}
	}
	echo "Unknown\n";
}
?>
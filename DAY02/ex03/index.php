<?php
	include "Elem.php";

	// $test = new Elem("html");
	// echo $test->element[0];
	// echo $test->element[1];


	$elem = new Elem('html');
	$body = new Elem('body');
	$body->pushElement(new Elem('p', 'Lorem ipsum'));
	echo $body->element[0];
	echo $body->element[1];
	$elem->pushElement($body);
	// echo $elem->getHTML();



?>
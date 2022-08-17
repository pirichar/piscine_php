
<?php
	include 'TemplateEngine.php';
	$template = new TemplateEngine;
	$array = array("Popa", "moman", "petit boy", "petite girl");
	$text = new Text($array);
	$text->add_new_string("LE MONONC TANNANT");
	$text->display_content();
	$template->createFile("POGO", $text);
	$text->add_new_string("LA MATANTE TANNANTE");
	$template->createFile("POGO", $text);
?>
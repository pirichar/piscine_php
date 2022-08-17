<?php
	$array = array("nom"=>"Pier-Luc", "auteur"=>"Steven", "description"=>"adulte", "prix"=>"pas cher");
	include 'TemplateEngine.php';
	$template = new TemplateEngine;
	$template->createFile("POGO", "book_description.html", $array);
?>””
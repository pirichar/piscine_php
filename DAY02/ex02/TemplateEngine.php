<?php
include 'HotBeverage.php';

class TemplateEngine{
	public function __construct(){
	}
	public function __destruct(){
		
	}

	public function createFile(HotBeverage $text){
		$ReflectionClass = new ReflectionClass($text);
		$A = $ReflectionClass->getName();
		$HTML = $A.'.html';
		$writehtml = fopen($HTML, 'w');
		$parameters = array($text->name, $text->price, $text->resistence, $text->description, $text->comment);
		$replace = array('{nom}', '{prix}', '{resistance}', '{description}', '{commentaire}');
		$content = file_get_contents("template.html");
		$to_replace_with = str_replace($replace, $parameters, $content);
		fwrite($writehtml, $to_replace_with);
	}
}
?>
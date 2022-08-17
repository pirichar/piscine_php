<?php
class TemplateEngine{
	public function __construct(){
	}
	public function __destruct(){
		
	}

	public function createFile($fileName, $templateName, $parameters){
		fclose(STDOUT);
		$STDOUT = fopen("$fileName".'.html', "w") or die ("Unable to open file!");
		$replace = array('{nom}', '{auteur}', '{description}', '{prix}');
		$content = file_get_contents($templateName);
		echo str_replace($replace, $parameters, $content);
	}
}
?>
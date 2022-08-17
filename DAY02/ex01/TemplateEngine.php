<?php
include 'Text.php';

class TemplateEngine{
	public function __construct(){
	}
	public function __destruct(){
		
	}

	public function createFile($fileName, Text $text){
		$HTML = $fileName.'.html';
		$writehtml = fopen($HTML, 'w');
		$loadhtml=
		'
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		{content}
	</body>
</html>
';
		$replace = '{content}';
		$array = &$text->get_content();
		$to_replace_with = str_replace($replace,join($array), $loadhtml);
		fwrite($writehtml, $to_replace_with);
	}
}
?>
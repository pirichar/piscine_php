<?php
class Text{
	private $array =  array();
	
	public function __construct($arrayOfStrings){
		$this->array = $arrayOfStrings;
		foreach ($this->array as &$elements)
			$elements = '<p>'.$elements.'</p>'."\n";
	}

	public function __destruct(){
	}

	public function add_new_string($to_add){
		$to_add = '<p>'.$to_add.'</p>'."\n";
		array_push($this->array, $to_add);
	}
	public	function	display_content(){
		foreach ($this->array as $elements)
			echo $elements;
	}
	public function		get_content(){
		return $this->array;
	}
}
?>
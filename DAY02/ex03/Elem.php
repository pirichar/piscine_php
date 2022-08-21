<?php

class Elem{
	private $element;
	private $content;
	private function array_insert(&$array, $position, $insert)
	{
		if (is_int($position)) {
			array_splice($array, $position, 0, $insert);
		} else {
			$pos   = array_search($position, array_keys($array));
			$array = array_merge(
				array_slice($array, 0, $pos),
				$insert,
				array_slice($array, $pos)
			);
		}
	}	

	public function __construct($element, $content = 0){
		//verify that you can create the element or not before to create it maybe
		$this->element = array("<".$element.">", "</".$element.">");
		$this->content = $content;
		if ($content != 0)
		{
			if (is_string($content))
				array_insert($this->element, 1, $content);
			else
				array_insert($this->element,1,$content->content);
		}

	}
	//this function accepts other elements
	public function pushElement($to_push){
		//push into the second or third array
		$this->content = array_push($this->element, $to_push->content);
		
	}

	public function getHTML(){
		foreach ($this->element as $element){
			if (is_string($element))
				$rtn .= $element;
			else
				$rtn .= $content[0];
		}
		return ($rtn);
	}

	public function __destruct(){
		
	}

	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
	
	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
		return $this;
	}
}

?>

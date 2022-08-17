<?php

class HotBeverage{
	protected $name;
	protected $price;
	protected $resistence;

	public	function __construct($name, $price, $resistence){
		$this->name = $name;
		$this->price = $price;
		$this->resistence = $resistence;
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
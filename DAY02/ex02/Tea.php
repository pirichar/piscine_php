<?php
	include_once "HotBeverage.php";
	class Tea extends HotBeverage{
		private $description;
		private $comment;

		public	function __construct($name, $price, $resistence, $description, $comment){
			parent::__construct($name, $price, $resistence);
			$this->description = $description;
			$this->comment = $comment;
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
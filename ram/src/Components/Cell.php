<?php

namespace Components;

class Cell{
	
	private $value;

	public function __construct($value = 0){
		$this->value = $value;
	}

	public function setValue($value){
		$this->value = $value;
	}

	public function getValue(){
		return $this->value;
	}
}

?>
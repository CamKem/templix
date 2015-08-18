<?php
namespace Wild\Templix\CssSelector\Filter;
use Wild\Templix\CssSelector\Filter\Pseudo;
class PseudoLt extends Pseudo{
	private $_position;
	function __construct($input){
		$this->_position = intval($input);
	}
	function match($node, $position, $items){
		return $position < $this->_position;
	}
}
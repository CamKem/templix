<?php
namespace Wild\Templix\CssSelector\Parser;
class CssParserHelper{	
	static function select($node, $query){
		$p = new CssParser($node, $query);
		return $p->parse();
	}
}
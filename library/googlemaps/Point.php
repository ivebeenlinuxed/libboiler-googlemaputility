<?php
namespace Library\GoogleMaps;

class Point {
	public $x,$y;
	function __construct($x,$y) {
		$this->x = $x;
		$this->y = $y;
	}
	function __toString() {
		return "({$this->x},{$this->y})";
	}
}//Point
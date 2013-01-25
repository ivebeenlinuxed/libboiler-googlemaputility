<?php
namespace Library\GoogleMaps;

class Boundary {
	public $x,$y,$width,$height;
	function __construct($x,$y,$width,$height) {
		$this->x = $x;
		$this->y = $y;
		$this->width = $width;
		$this->height = $height;
	}
	function __toString() {
		return "({$this->x},{$this->y},{$this->width},{$this->height})";
		}
	}
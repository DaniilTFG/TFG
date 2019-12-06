<?php
namespace DaniilTFG;
// LinearEquation a*x + b = 0

class LinearEquation {
	protected $x;
	function ur($a, $b){
		if ($a != 0) {
			$x = -1*$b/$a;
			$this->x = $x;
			return $x;
		}
		throw new DaniilTFGException ("Equation does not exist");	
	}
}
?>
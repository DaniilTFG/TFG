<?php
namespace DaniilTFG;
// Квадратное уравнение ax^2+bx+c
class QuadraticEquation extends LinearEquation implements \core\EquationInterface{
	protected $c;
	protected $x2;
	protected function dis($a, $b, $c) {
		return $b*$b - 4*$a*$c;
	}
	function solve($a, $b, $c) {
		if ($a == 0){
			return $this ->ur($a , $b);
		}
		$dis = $this->dis($a, $b, $c);
		if ($dis > 0) {
			$x = (-1*$b + sqrt($dis))/(2*$a);
			$x2 = (-1*$b - sqrt($dis))/(2*$a);
			$this->x = $x;
			$this->x2 = $x2;
			return array($x, $x2);
		} elseif ($dis = 0) {
			$x = (-1*$b)/(2*$a);
			$this->x = $x;
			return array($x);
		}
		throw new DaniilTFGException ("Equation has no roots");
	}
}
?>
<?php
class VException extends RuntimeException {
}
class LinearEquation {
	protected $a;
	protected $b;
	protected $x;
	function ur($a, $b){
		if ($a != 0) {
			$x = -1*$b/$a;
			$this->x = $x;
			return $x;
		}
		throw new VException ("Нет решения");	
	}
}
class QuadraticEquation extends LinearEquation{
	protected $c;
	protected $x2;
	protected function dis($a, $b, $c) {
		$dis = $b*$b - 4*$a*$c;
		return $dis;
	}
	function ur2($a, $b, $c) {
		$dis = $this->dis($a, $b, $c);
		if ($a == 0){
		$this ->ur($a , $b);
		}
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
		throw new VException ("Нет решения");
	}
}
?>




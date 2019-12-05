<?php
class A{

}
class B extends A{
	protected a;
	function __construct($a){
		$this->a = $a;
	}
}
class C extends B{
	protected b;
	function __construct($b,$a){
	parent::__construct($a);
		$this->b = $b,$a;
		
	}
}

$a = new B(new A());
$c=new B(new C(new B(New B(New C(New A(),$a),$a))));
<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("DaniilTFG/DaniilTFGException.php");
include_once("DaniilTFG/LinearEquation.php");
include_once("DaniilTFG/QuadraticEquation.php");
include_once("DaniilTFG/MyLog.php");
$co_arr = [];
foreach(["a", "b", "c"] as $co) {
	$line = readline("Enter ".$co.": ");
	$co_arr[$co] = $line === "" ? 0 : $line;
}
$a = $co_arr["a"];
$b = $co_arr["b"];
$c = $co_arr["c"];
//DaniilTFG\Log::log("Entered numbers: " . implode(", ", $co_arr));
DaniilTFG\Log::log("Equation: $a*x^2 + $b*x + $c = 0");
try {
	$solver = new DaniilTFG\QuadraticEquation($a, $b, $c);
	
	DaniilTFG\Log::log("Roots: " . implode(", ", $solver->solve($a, $b, $c)));
	
}catch(DaniilTFG\DaniilTFGException $ms) {
	DaniilTFG\Log::log($ms->getMessage());
} 
DaniilTFG\Log::write();
?>
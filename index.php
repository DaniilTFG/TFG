<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("DaniilTFG/DaniilTFGException.php");
include_once("DaniilTFG/LinearEquation.php");
include_once("DaniilTFG/QuadraticEquation.php");
include_once("DaniilTFG/MyLog.php");

date_default_timezone_set("Europe/Moscow");

$file = @fopen('version', 'r');
if ($file !== false) {
	$version = trim(fread($file, 100));
	DaniilTFG\Log::log("Program version: " . $version);
}

$arr = [];
$arr[] = readline("a=");
$arr[] = readline("b=");
$arr[] = readline("c=");
try {
	$solver = new DaniilTFG\QuadraticEquation($arr[0], $arr[1], $arr[2]);
	
	DaniilTFG\Log::log("Roots: " . implode(", ", $solver->solve($arr[0], $arr[1], $arr[2])));
	
}catch(DaniilTFG\DaniilTFGException $ex) {
	DaniilTFG\Log::log($ex->getMessage());
} 
DaniilTFG\Log::write();
?>

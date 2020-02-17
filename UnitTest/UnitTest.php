<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("DaniilTFG/DaniilTFGException.php");
include_once("DaniilTFG/LinearEquation.php");
include_once("DaniilTFG/QuadraticEquation.php");
include_once("DaniilTFG/MyLog.php");

final class UnitTest extends TestCase
{
  public function testQuadratic1_m7_12(): void
  {
    $solver = new DaniilTFG\QuadraticEquation(1, -7, 12);
    $r = $solver->solve(1, -7, 12);
    $this->assertEquals($r, [4, 3]);
  }

  public function testQuadratic6_3_m9(): void
  {
    $solver = new DaniilTFG\QuadraticEquation(6, 3, -9);
    $r = $solver->solve(6, 3, -9);
    $this->assertEquals($r, [1, -1,5]);
  }

  public function testLinear1_10(): void
  {
    $solver = new DaniilTFG\LinearEquation();
    $r = $solver->ur(1, 10);
    $this->assertEquals($r, [-10]);
  }

  public function testLinear3_15(): void
  {
    $solver = new DaniilTFG\LinearEquation();
    $r = $solver->ur(3, 15);
    $this->assertEquals($r, [-5]);
  }

  public function testAllZerosException(): void
  {
    $this->expectException(DaniilTFG\DaniilTFGException::class);    
    $solver = new DaniilTFG\QuadraticEquation(0, 0, 0);
    $solver->solve(0, 0, 0);
  }

  public function testAllZerosExceptionLinear(): void
  {
    $this->expectException(DaniilTFG\DaniilTFGException::class);    
    $solver = new DaniilTFG\LinearEquation();
    $solver->ur(0, 0);
  }
}

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
  public function testQuadratic(): void
  {
    $solver = new DaniilTFG\QuadraticEquation(1, -7, 12);
    $r = $solver->solve(1, -7, 12);
    $this->assertEquals($r, [4, 3]);
  }

  public function testLinear(): void
  {
    $solver = new DaniilTFG\LinearEquation();
    $r = $solver->ur(1, 10);
    $this->assertEquals($r, -10);
  }

  public function testAllZerosException(): void
  {
    $this->expectException(DaniilTFG\DaniilTFGException::class);    
    $solver = new DaniilTFG\QuadraticEquation(0, 0, 0);
    $solver->solve(0, 0, 0);
  }

  public function testLinear2(): void
  {
    $this->expectException(DaniilTFG\DaniilTFGException::class);    
    $solver = new DaniilTFG\LinearEquation();
    $solver->ur(0, 0);
  }
}

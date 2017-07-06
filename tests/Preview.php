<?php

namespace Coderabbi\Phpumoji;

use PHPUnit\Framework\TestCase;

class Simulation extends TestCase
{
    public function testPass1()
    {
       $this->assertTrue(true);
    }

    public function testPass2()
    {
        $this->assertTrue(true);
    }

    public function testPass3()
    {
        $this->assertTrue(true);
    }

    public function testPass4()
    {
        $this->assertTrue(true);
    }

    public function testRisky()
    {

    }

    public function testPass6()
    {
        $this->assertTrue(true);
    }

    public function testPass7()
    {
        $this->assertTrue(true);
    }

    public function testFail1()
    {
        throw new \Exception();
    }

    public function testPass8()
    {
        $this->assertTrue(true);
    }

    public function testPass9()
    {
        $this->assertTrue(true);
    }

    public function testPass10()
    {
        $this->assertTrue(true);
    }

    public function testError()
    {
        $this->assertTrue(false);
    }

    public function testPass11()
    {
        $this->assertTrue(true);
    }

    public function testPass12()
    {
        $this->assertTrue(true);
    }

    public function testPass13()
    {
        $this->assertTrue(true);
    }

    public function testIncomplete()
    {
        $this->markTestIncomplete();
    }

    public function testPass14()
    {
        $this->assertTrue(true);
    }

}

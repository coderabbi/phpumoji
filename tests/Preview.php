<?php declare(strict_types=1);

namespace Coderabbi\Phpumoji;

use PHPUnit\Framework\TestCase;

class Preview extends TestCase
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
        // intentionally blank
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
        throw new \Exception('The test threw an uncaught exception.');
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
        $this->assertTrue(false, 'This test has a faile assertion.');
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
        $this->markTestIncomplete('This test is incomplete.');
    }

    public function testPass14()
    {
        $this->assertTrue(true);
    }

    public function testPass15()
    {
        $this->assertTrue(true);
    }

    public function testSkipped()
    {
        $this->markTestSkipped('This test was skipped.');
    }

    public function testPass16()
    {
        $this->assertTrue(true);
    }

    public function testPass17()
    {
        $this->assertTrue(true);
    }

    public function testPass18()
    {
        $this->assertTrue(true);
    }

    public function testPass19()
    {
        $this->assertTrue(true);
    }

    public function testPass20()
    {
        $this->assertTrue(true);
    }
}

<?php

namespace CreateOpen\Traits;

use PHPUnit_Framework_TestCase;
use Exception;

/**
 * Class ToStringTest
 * @package CreateOpen\Traits
 * @covers CreateOpen\Traits\ToString
 */
class ToStringTest extends PHPUnit_Framework_TestCase
{

    protected function createObjectForTrait()
    {
        return $this->getObjectForTrait(__NAMESPACE__.'\ToString');
    }

    /**
     * @return mixed
     */
    private function getStub()
    {
        $stub = $this->getMockForTrait(__NAMESPACE__ . '\ToString');
        return $stub;
    }

    public function testStringIsUntouched()
    {
        $expected = 'foo';
        $stub = $this->getStub();

        $stub->expects($this->any())
            ->method('toString')
            ->will($this->returnValue('foo'));

        $actual = (string) $stub;

        $this->assertEquals($expected, $actual);
    }

    public function testIntIsCastedToString()
    {
        $expected = '7';
        $stub = $this->getStub();

        $stub->expects($this->any())
            ->method('toString')
            ->will($this->returnValue(7));

        $actual = (string) $stub;

        $this->assertEquals($expected, $actual);
    }

    public function testThrowingExceptionIsNotFatal()
    {
        $expected = '';
        $exception = new Exception;
        $stub = $this->getStub();

        $stub->expects($this->any())
            ->method('toString')
            ->will($this->throwException($exception));

        $actual = (string) $stub;

        $this->assertEquals($expected, $actual);
    }
}
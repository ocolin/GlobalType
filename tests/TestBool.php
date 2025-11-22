<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\Tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;

class TestBool extends TestCase
{
    public function testBoolGood() : void
    {
        $output = GT::callBool( value: true );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolBad() : void
    {
        $output = GT::callBool( value: [] );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolNullGood() : void
    {
        $output = GT::callBoolNull( value: true );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolNullBad() : void
    {
        $output = GT::callBoolNull( value: [] );
        self::assertNull( $output );
    }
}
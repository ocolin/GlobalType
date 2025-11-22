<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;

class TestInts extends TestCase
{
    public function testIntGood() : void
    {
        $output = GT::callInt( value: 123 );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntBad() : void
    {
        $output = GT::callInt( value: [] );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );
    }

    public function testIntNullGood() : void
    {
        $output = GT::callIntNull( value: 123 );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntNullBad() : void
    {
        $output = GT::callIntNull( value: [] );
        self::assertNull( $output );
    }
}
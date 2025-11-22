<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;

class TestStrings extends TestCase
{
    public function testStringGood() : void
    {
        $output = GT::callString( value: 'this is a string' );
        self::assertIsString( $output );
        self::assertEquals( 'this is a string', $output );
    }

    public function testStringBad() : void
    {
        $output = GT::callString( value: [] );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringNullGood() : void
    {
        $output = GT::callStringNull( value: 'this is a string' );
        self::assertIsString( $output );
        self::assertEquals( 'this is a string', $output );
    }

    public function testStringNullBad() : void
    {
        $output = GT::callStringNull( value: [] );
        self::assertNull( $output );
    }
}
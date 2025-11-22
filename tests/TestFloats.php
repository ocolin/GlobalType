<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;

class TestFloats extends TestCase
{
    public function testFloatGood() : void
    {
        $output = GT::callFloat( value: 123.5 );
        self::assertIsFloat( $output );
        self::assertEquals( 123.5, $output );
    }

    public function testFloatBad() : void
    {
        $output = GT::callFloat( value: [] );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatNullGood() : void
    {
        $output = GT::callFloatNull( value: 123.5 );
        self::assertIsFloat( $output );
        self::assertEquals( 123.5, $output );
    }

    public function testFloatNullBad() : void
    {
        $output = GT::callFloatNull( value: [] );
        self::assertNull( $output );
    }
}
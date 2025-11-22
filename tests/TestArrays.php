<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;

class TestArrays extends TestCase
{
    public function testArrayGood() : void
    {
        $output = GT::callArray( value: [0] );
        self::assertIsArray( $output );
        self::assertEquals( [0], $output );
    }

    public function testArrayBad() : void
    {
        $output = GT::callArray( value: 'string' );
        self::assertIsArray( $output );
        self::assertEmpty( $output );
    }

    public function testArrayNullGood() : void
    {
        $output = GT::callArrayNull( value: [0] );
        self::assertIsArray( $output );
        self::assertEquals( [0], $output );
    }

    public function testArrayNullBad() : void
    {
        $output = GT::callArrayNull( value: 'string' );
        self::assertNull( $output );
    }
}
<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;

class TestEnvs extends TestCase
{
    public function testStringGood() : void
    {
        $output = GT::callString( value: 'test' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringBad() : void
    {
        $output = GT::callString( value: 'bad' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringNullGood() : void
    {
        $output = GT::callStringNull( value: 'test' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringNullBad() : void
    {
        $output = GT::callStringNull( value: 'bad' );
        self::assertNull( $output );
    }

    public static function setUpBeforeClass() : void
    {
        $_COOKIE['test'] = 'string';
        $_COOKIE['bad'] = [];
    }
}
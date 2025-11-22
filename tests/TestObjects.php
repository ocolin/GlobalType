<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;
use stdClass;

class TestObjects extends TestCase
{
    public static object $obj;

    public static string $str = 'string';

    public function testObjectGood() : void
    {
        $output = GT::callObject( value: self::$obj );
        self::assertIsObject( $output );
        self::assertEquals( self::$obj, $output );
    }

    public function testObjectBad() : void
    {
        $output = GT::callObject( value: 'string' );
        self::assertIsObject( $output );
    }

    public function testObjectNullGood() : void
    {
        $output = GT::callObjectNull( value: self::$obj );
        self::assertIsObject( $output );
        self::assertEquals( self::$obj, $output );
    }

    public function testObjectNullBad() : void
    {
        $output = GT::callObjectNull( value: 'string' );
        self::assertNull( $output );
    }

    public static function setUpBeforeClass() : void
    {
        self::$obj = new stdClass();
    }
}
<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;
use stdClass;

class TestCookies extends TestCase
{
    public function testStringGood() : void
    {
        $output = GT::cookieString( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringBad() : void
    {
        $output = GT::cookieString( name: 'string_bad' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringMissing() : void
    {
        $output = GT::cookieString( name: 'string_missing' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringNullGood() : void
    {
        $output = GT::cookieStringNull( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringNullBad() : void
    {
        $output = GT::cookieStringNull( name: 'string_bad' );
        self::assertNull( $output );
    }


    public function testIntGood() : void
    {
        $output = GT::cookieInt( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntBad() : void
    {
        $output = GT::cookieInt( name: 'int_bad' );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );
    }

    public function testIntMissing() : void
    {
        $output = GT::cookieInt( name: 'int_missing' );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );
    }

    public function testIntNullGood() : void
    {
        $output = GT::cookieIntNull( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntNullBad() : void
    {
        $output = GT::cookieIntNull( name: 'int_bad' );
        self::assertNull( $output );
    }

    public function testFloatGood() : void
    {
        $output = GT::cookieFloat( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatBad() : void
    {
        $output = GT::cookieFloat( name: 'float_bad' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatMissing() : void
    {
        $output = GT::cookieFloat( name: 'float_missing' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatNullGood() : void
    {
        $output = GT::cookieFloatNull( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatNullBad() : void
    {
        $output = GT::cookieFloatNull( name: 'float_bad' );
        self::assertNull( $output );
    }

    public function testArrayGood() : void
    {
        $output = GT::cookieArray( name: 'array_good' );
        self::assertIsArray( $output );
    }

    public function testArrayBad() : void
    {
        $output = GT::cookieArray( name: 'array_bad' );
        self::assertIsArray( $output );
    }

    public function testArrayMissing() : void
    {
        $output = GT::cookieArray( name: 'array_missing' );
        self::assertIsArray( $output );
    }

    public function testArrayNullGood() : void
    {
        $output = GT::cookieArrayNull( name: 'array_good' );
        self::assertIsArray( $output );

    }

    public function testArrayNullBad() : void
    {
        $output = GT::cookieArrayNull( name: 'array_bad' );
        self::assertNull( $output );
    }

    public function testObjectGood() : void
    {
        $output = GT::cookieObject( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectBad() : void
    {
        $output = GT::cookieObject( name: 'object_bad' );
        self::assertIsObject( $output );
    }

    public function testObjectMissing() : void
    {
        $output = GT::cookieObject( name: 'object_missing' );
        self::assertIsObject( $output );
    }

    public function testObjectNullGood() : void
    {
        $output = GT::cookieObjectNull( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectNullBad() : void
    {
        $output = GT::cookieObjectNull( name: 'object_bad' );
        self::assertNull( $output );
    }

    public function testBoolGood() : void
    {
        $output = GT::cookieBool( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolBad() : void
    {
        $output = GT::cookieBool( name: 'bool_bad' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolMissing() : void
    {
        $output = GT::cookieBool( name: 'bool_missing' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolNullGood() : void
    {
        $output = GT::cookieBoolNull( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolNullBad() : void
    {
        $output = GT::cookieBoolNull( name: 'bool_bad' );
        self::assertNull( $output );
    }


    public static function setUpBeforeClass() : void
    {
        $_COOKIE['string_good'] = 'string';
        $_COOKIE['string_bad'] = [];
        $_COOKIE['int_good'] = 123;
        $_COOKIE['int_bad'] = [];
        $_COOKIE['float_good'] = 5.5;
        $_COOKIE['float_bad'] = [];
        $_COOKIE['array_good'] = [];
        $_COOKIE['array_bad'] = 'bad';
        $_COOKIE['object_good'] = new stdClass();
        $_COOKIE['object_bad'] = '';
        $_COOKIE['bool_good'] = true;
        $_COOKIE['bool_bad'] = [];
    }
}
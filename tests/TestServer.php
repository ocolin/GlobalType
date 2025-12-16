<?php

declare( strict_types = 1 );

namespace Ocolin\serverType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;
use stdClass;

class TestServer extends TestCase
{
    public function testStringGood() : void
    {
        $output = GT::serverString( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringBad() : void
    {
        $output = GT::serverString( name: 'string_bad' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringMissing() : void
    {
        $output = GT::serverString( name: 'string_missing' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringNullGood() : void
    {
        $output = GT::serverStringNull( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringNullBad() : void
    {
        $output = GT::serverStringNull( name: 'string_bad' );
        self::assertNull( $output );
    }


    public function testIntGood() : void
    {
        $output = GT::serverInt( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntBad() : void
    {
        $output = GT::serverInt( name: 'int_bad' );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );
    }

    public function testIntMissing() : void
    {
        $output = GT::serverInt( name: 'int_missing' );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );
    }

    public function testIntNullGood() : void
    {
        $output = GT::serverIntNull( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntNullBad() : void
    {
        $output = GT::serverIntNull( name: 'int_bad' );
        self::assertNull( $output );
    }

    public function testFloatGood() : void
    {
        $output = GT::serverFloat( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatBad() : void
    {
        $output = GT::serverFloat( name: 'float_bad' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatMissing() : void
    {
        $output = GT::serverFloat( name: 'float_missing' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatNullGood() : void
    {
        $output = GT::serverFloatNull( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatNullBad() : void
    {
        $output = GT::serverFloatNull( name: 'float_bad' );
        self::assertNull( $output );
    }

    public function testArrayGood() : void
    {
        $output = GT::serverArray( name: 'array_good' );
        self::assertIsArray( $output );
    }

    public function testArrayBad() : void
    {
        $output = GT::serverArray( name: 'array_bad' );
        self::assertIsArray( $output );
    }

    public function testArrayMissing() : void
    {
        $output = GT::serverArray( name: 'array_missing' );
        self::assertIsArray( $output );
    }

    public function testArrayNullGood() : void
    {
        $output = GT::serverArrayNull( name: 'array_good' );
        self::assertIsArray( $output );

    }

    public function testArrayNullBad() : void
    {
        $output = GT::serverArrayNull( name: 'array_bad' );
        self::assertNull( $output );
    }

    public function testObjectGood() : void
    {
        $output = GT::serverObject( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectBad() : void
    {
        $output = GT::serverObject( name: 'object_bad' );
        self::assertIsObject( $output );
    }

    public function testObjectMissing() : void
    {
        $output = GT::serverObject( name: 'object_missing' );
        self::assertIsObject( $output );
    }

    public function testObjectNullGood() : void
    {
        $output = GT::serverObjectNull( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectNullBad() : void
    {
        $output = GT::serverObjectNull( name: 'object_bad' );
        self::assertNull( $output );
    }

    public function testBoolGood() : void
    {
        $output = GT::serverBool( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolBad() : void
    {
        $output = GT::serverBool( name: 'bool_bad' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolMissing() : void
    {
        $output = GT::serverBool( name: 'bool_missing' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolNullGood() : void
    {
        $output = GT::serverBoolNull( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolNullBad() : void
    {
        $output = GT::serverBoolNull( name: 'bool_bad' );
        self::assertNull( $output );
    }

    public static function setUpBeforeClass() : void
    {
        $_SERVER['string_good'] = 'string';
        $_SERVER['string_bad'] = [];
        $_SERVER['int_good'] = 123;
        $_SERVER['int_bad'] = [];
        $_SERVER['float_good'] = 5.5;
        $_SERVER['float_bad'] = [];
        $_SERVER['array_good'] = [];
        $_SERVER['array_bad'] = 'bad';
        $_SERVER['object_good'] = new stdClass();
        $_SERVER['object_bad'] = '';
        $_SERVER['bool_good'] = true;
        $_SERVER['bool_bad'] = [];
    }
}
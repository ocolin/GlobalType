<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;
use stdClass;

class TestEnv extends TestCase
{
    public function testStringGood() : void
    {
        $output = GT::envString( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringBad() : void
    {
        $output = GT::envString( name: 'string_bad' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringMissing() : void
    {
        $output = GT::envString( name: 'string_missing' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringNullGood() : void
    {
        $output = GT::envStringNull( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringNullBad() : void
    {
        $output = GT::envStringNull( name: 'string_bad' );
        self::assertNull( $output );
    }


    public function testIntGood() : void
    {
        $output = GT::envInt( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntBad() : void
    {
        $output = GT::envInt( name: 'int_bad' );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );
    }

    public function testIntMissing() : void
    {
        $output = GT::envInt( name: 'int_missing' );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );
    }

    public function testIntNullGood() : void
    {
        $output = GT::envIntNull( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntNullBad() : void
    {
        $output = GT::envIntNull( name: 'int_bad' );
        self::assertNull( $output );
    }

    public function testFloatGood() : void
    {
        $output = GT::envFloat( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatBad() : void
    {
        $output = GT::envFloat( name: 'float_bad' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatMissing() : void
    {
        $output = GT::envFloat( name: 'float_missing' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatNullGood() : void
    {
        $output = GT::envFloatNull( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatNullBad() : void
    {
        $output = GT::envFloatNull( name: 'float_bad' );
        self::assertNull( $output );
    }

    public function testArrayGood() : void
    {
        $output = GT::envArray( name: 'array_good' );
        self::assertIsArray( $output );
    }

    public function testArrayBad() : void
    {
        $output = GT::envArray( name: 'array_bad' );
        self::assertIsArray( $output );
    }

    public function testArrayMissing() : void
    {
        $output = GT::envArray( name: 'array_missing' );
        self::assertIsArray( $output );
    }

    public function testArrayNullGood() : void
    {
        $output = GT::envArrayNull( name: 'array_good' );
        self::assertIsArray( $output );

    }

    public function testArrayNullBad() : void
    {
        $output = GT::envArrayNull( name: 'array_bad' );
        self::assertNull( $output );
    }

    public function testObjectGood() : void
    {
        $output = GT::envObject( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectBad() : void
    {
        $output = GT::envObject( name: 'object_bad' );
        self::assertIsObject( $output );
    }

    public function testObjectMissing() : void
    {
        $output = GT::envObject( name: 'object_missing' );
        self::assertIsObject( $output );
    }

    public function testObjectNullGood() : void
    {
        $output = GT::envObjectNull( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectNullBad() : void
    {
        $output = GT::envObjectNull( name: 'object_bad' );
        self::assertNull( $output );
    }

    public function testBoolGood() : void
    {
        $output = GT::envBool( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolBad() : void
    {
        $output = GT::envBool( name: 'bool_bad' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolMissing() : void
    {
        $output = GT::envBool( name: 'bool_missing' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolNullGood() : void
    {
        $output = GT::envBoolNull( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolNullBad() : void
    {
        $output = GT::envBoolNull( name: 'bool_bad' );
        self::assertNull( $output );
    }



    public static function setUpBeforeClass() : void
    {
        $_ENV['string_good'] = 'string';
        $_ENV['string_bad'] = [];
        $_ENV['int_good'] = 123;
        $_ENV['int_bad'] = [];
        $_ENV['float_good'] = 5.5;
        $_ENV['float_bad'] = [];
        $_ENV['array_good'] = [];
        $_ENV['array_bad'] = 'bad';
        $_ENV['object_good'] = new stdClass();
        $_ENV['object_bad'] = '';
        $_ENV['bool_good'] = true;
        $_ENV['bool_bad'] = [];
    }
}
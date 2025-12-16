<?php

declare( strict_types = 1 );

namespace Ocolin\sessionType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;
use stdClass;

class TestSession extends TestCase
{
    public function testStringGood() : void
    {
        $output = GT::sessionString( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringBad() : void
    {
        $output = GT::sessionString( name: 'string_bad' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringMissing() : void
    {
        $output = GT::sessionString( name: 'string_missing' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringNullGood() : void
    {
        $output = GT::sessionStringNull( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringNullBad() : void
    {
        $output = GT::sessionStringNull( name: 'string_bad' );
        self::assertNull( $output );
    }


    public function testIntGood() : void
    {
        $output = GT::sessionInt( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntBad() : void
    {
        $output = GT::sessionInt( name: 'int_bad' );
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
        $output = GT::sessionIntNull( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntNullBad() : void
    {
        $output = GT::sessionIntNull( name: 'int_bad' );
        self::assertNull( $output );
    }

    public function testFloatGood() : void
    {
        $output = GT::sessionFloat( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatBad() : void
    {
        $output = GT::sessionFloat( name: 'float_bad' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatMissing() : void
    {
        $output = GT::sessionFloat( name: 'float_missing' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatNullGood() : void
    {
        $output = GT::sessionFloatNull( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatNullBad() : void
    {
        $output = GT::sessionFloatNull( name: 'float_bad' );
        self::assertNull( $output );
    }

    public function testArrayGood() : void
    {
        $output = GT::sessionArray( name: 'array_good' );
        self::assertIsArray( $output );
    }

    public function testArrayBad() : void
    {
        $output = GT::sessionArray( name: 'array_bad' );
        self::assertIsArray( $output );
    }

    public function testArrayMissing() : void
    {
        $output = GT::sessionArray( name: 'array_missing' );
        self::assertIsArray( $output );
    }

    public function testArrayNullGood() : void
    {
        $output = GT::sessionArrayNull( name: 'array_good' );
        self::assertIsArray( $output );

    }

    public function testArrayNullBad() : void
    {
        $output = GT::sessionArrayNull( name: 'array_bad' );
        self::assertNull( $output );
    }

    public function testObjectGood() : void
    {
        $output = GT::sessionObject( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectBad() : void
    {
        $output = GT::sessionObject( name: 'object_bad' );
        self::assertIsObject( $output );
    }

    public function testObjectMissing() : void
    {
        $output = GT::sessionObject( name: 'object_missing' );
        self::assertIsObject( $output );
    }

    public function testObjectNullGood() : void
    {
        $output = GT::sessionObjectNull( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectNullBad() : void
    {
        $output = GT::sessionObjectNull( name: 'object_bad' );
        self::assertNull( $output );
    }

    public function testBoolGood() : void
    {
        $output = GT::sessionBool( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolBad() : void
    {
        $output = GT::sessionBool( name: 'bool_bad' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolMissing() : void
    {
        $output = GT::sessionBool( name: 'bool_missing' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolNullGood() : void
    {
        $output = GT::sessionBoolNull( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolNullBad() : void
    {
        $output = GT::sessionBoolNull( name: 'bool_bad' );
        self::assertNull( $output );
    }

    public static function setUpBeforeClass() : void
    {
        $_SESSION['string_good'] = 'string';
        $_SESSION['string_bad'] = [];
        $_SESSION['int_good'] = 123;
        $_SESSION['int_bad'] = [];
        $_SESSION['float_good'] = 5.5;
        $_SESSION['float_bad'] = [];
        $_SESSION['array_good'] = [];
        $_SESSION['array_bad'] = 'bad';
        $_SESSION['object_good'] = new stdClass();
        $_SESSION['object_bad'] = '';
        $_SESSION['bool_good'] = true;
        $_SESSION['bool_bad'] = [];
    }
}
<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\tests;

use Ocolin\GlobalType\GT;
use PHPUnit\Framework\TestCase;
use stdClass;

class TestFiles extends TestCase
{
    public function testStringGood() : void
    {
        $output = GT::filesString( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringBad() : void
    {
        $output = GT::filesString( name: 'string_bad' );
        self::assertIsString( $output );
        self::assertEmpty( $output );
    }

    public function testStringNullGood() : void
    {
        $output = GT::filesStringNull( name: 'string_good' );
        self::assertIsString( $output );
        self::assertEquals( 'string', $output );
    }

    public function testStringNullBad() : void
    {
        $output = GT::filesStringNull( name: 'string_bad' );
        self::assertNull( $output );
    }


    public function testIntGood() : void
    {
        $output = GT::filesInt( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntBad() : void
    {
        $output = GT::filesInt( name: 'int_bad' );
        self::assertIsInt( $output );
        self::assertEquals( 0, $output );

    }

    public function testIntNullGood() : void
    {
        $output = GT::filesIntNull( name: 'int_good' );
        self::assertIsInt( $output );
        self::assertEquals( 123, $output );
    }

    public function testIntNullBad() : void
    {
        $output = GT::filesIntNull( name: 'int_bad' );
        self::assertNull( $output );
    }

    public function testFloatGood() : void
    {
        $output = GT::filesFloat( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatBad() : void
    {
        $output = GT::filesFloat( name: 'float_bad' );
        self::assertIsFloat( $output );
        self::assertEquals( 0, $output );
    }

    public function testFloatNullGood() : void
    {
        $output = GT::filesFloatNull( name: 'float_good' );
        self::assertIsFloat( $output );
        self::assertEquals( 5.5, $output );
    }

    public function testFloatNullBad() : void
    {
        $output = GT::filesFloatNull( name: 'float_bad' );
        self::assertNull( $output );
    }

    public function testArrayGood() : void
    {
        $output = GT::filesArray( name: 'array_good' );
        self::assertIsArray( $output );
    }

    public function testArrayBad() : void
    {
        $output = GT::filesArray( name: 'array_bad' );
        self::assertIsArray( $output );
    }

    public function testArrayNullGood() : void
    {
        $output = GT::filesArrayNull( name: 'array_good' );
        self::assertIsArray( $output );

    }

    public function testArrayNullBad() : void
    {
        $output = GT::filesArrayNull( name: 'array_bad' );
        self::assertNull( $output );
    }

    public function testObjectGood() : void
    {
        $output = GT::filesObject( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectBad() : void
    {
        $output = GT::filesObject( name: 'object_bad' );
        self::assertIsObject( $output );
    }

    public function testObjectNullGood() : void
    {
        $output = GT::filesObjectNull( name: 'object_good' );
        self::assertIsObject( $output );
    }

    public function testObjectNullBad() : void
    {
        $output = GT::filesObjectNull( name: 'object_bad' );
        self::assertNull( $output );
    }

    public function testBoolGood() : void
    {
        $output = GT::filesBool( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolBad() : void
    {
        $output = GT::filesBool( name: 'bool_bad' );
        self::assertIsBool( $output );
        self::assertFalse( $output );
    }

    public function testBoolNullGood() : void
    {
        $output = GT::filesBoolNull( name: 'bool_good' );
        self::assertIsBool( $output );
        self::assertTrue( $output );
    }

    public function testBoolNullBad() : void
    {
        $output = GT::filesBoolNull( name: 'bool_bad' );
        self::assertNull( $output );
    }


    public static function setUpBeforeClass() : void
    {
        $_FILES['string_good'] = 'string';
        $_FILES['string_bad'] = [];
        $_FILES['int_good'] = 123;
        $_FILES['int_bad'] = [];
        $_FILES['float_good'] = 5.5;
        $_FILES['float_bad'] = [];
        $_FILES['array_good'] = [];
        $_FILES['array_bad'] = 'bad';
        $_FILES['object_good'] = new stdClass();
        $_FILES['object_bad'] = '';
        $_FILES['bool_good'] = true;
        $_FILES['bool_bad'] = [];
    }
}
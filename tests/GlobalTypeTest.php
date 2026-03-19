<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Ocolin\GlobalType\GT;
use Ocolin\GlobalType\COOKIE;
use Ocolin\GlobalType\ENV;
use Ocolin\GlobalType\FILES;
use Ocolin\GlobalType\GET;
use Ocolin\GlobalType\GLOBALS;
use Ocolin\GlobalType\POST;
use Ocolin\GlobalType\REQUEST;
use Ocolin\GlobalType\SERVER;
use Ocolin\GlobalType\SESSION;
use stdClass;


class GlobalTypeTest extends TestCase
{
    private static stdClass $testObject;

/* STRING TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetStringGood( string $class ): void
    {
        $this->assertSame( 'hello', $class::getString( name: 'string_val' ));
    }


    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetStringWrongType( string $class ): void
    {
        $this->assertSame( '', $class::getString( name: 'int_val' ));
    }


    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetStringMissing( string $class ): void
    {
        $this->assertSame( '', $class::getString( name: 'missing' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetStringMissingWithDefault( string $class ): void
    {
        $this->assertSame(
            'default', $class::getString( name: 'missing', default: 'default' )
        );
    }



/* STRING NULL TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetStringNullGood( string $class ): void
    {
        $this->assertSame( 'hello', $class::getStringNull( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetStringNullWrongType( string $class ): void
    {
        $this->assertNull( $class::getStringNull( name: 'int_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetStringNullMissing( string $class ): void
    {
        $this->assertNull( $class::getStringNull( name: 'missing' ));
    }


/* INT TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntGood( string $class ): void
    {
        $this->assertSame( 42, $class::getInt( name: 'int_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntGoodIsNumeric( string $class ): void
    {
        $this->assertSame( 42, $class::getInt( name: 'int_string' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntGoodFloat( string $class ): void
    {
        $this->assertSame( 3, $class::getInt( name: 'float_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntWrongType( string $class ): void
    {
        $this->assertSame( 0, $class::getInt( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntMissing( string $class ): void
    {
        $this->assertSame( 0, $class::getInt( name: 'missing' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntDefault( string $class ): void
    {
        $this->assertSame( 777, $class::getInt( name: 'missing', default: 777 ));
    }


/* INT NULL TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntNullGood( string $class ): void
    {
        $this->assertSame( 42, $class::getIntNull( name: 'int_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntNullGoodIsNumeric( string $class ): void
    {
        $this->assertSame( 42, $class::getIntNull( name: 'int_string' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntNullGoodFloat( string $class ): void
    {
        $this->assertSame( 3, $class::getIntNull( name: 'float_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntNullWrongType( string $class ): void
    {
        $this->assertNull( $class::getIntNull( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetIntNullMissing( string $class ): void
    {
        $this->assertNull( $class::getIntNull( name: 'missing' ));
    }


/* FLOAT TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatGood( string $class ): void
    {
        $this->assertSame( 3.14, $class::getFloat( name: 'float_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatGoodString( string $class ): void
    {
        $this->assertSame( 3.14, $class::getFloat( name: 'float_string' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatGoodInt( string $class ): void
    {
        $this->assertSame( 42.0, $class::getFloat( name: 'int_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatWrongType( string $class ): void
    {
        $this->assertSame( 0.0, $class::getFloat( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatMissing( string $class ): void
    {
        $this->assertSame( 0.0, $class::getFloat( name: 'missing' ));
    }


    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatDefault( string $class ): void
    {
        $this->assertSame( 777.0, $class::getFloat( name: 'missing', default: 777.0 ));
    }


/* FLOAT NULL TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatNullGood( string $class ): void
    {
        $this->assertSame( 3.14, $class::getFloatNull( name: 'float_val' ));
    }


    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatNullGoodString( string $class ): void
    {
        $this->assertSame( 3.14, $class::getFloatNull( name: 'float_string' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatNullGoodInt( string $class ): void
    {
        $this->assertSame( 42.0, $class::getFloatNull( name: 'int_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatNullWrongType( string $class ): void
    {
        $this->assertNull( $class::getFloatNull( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetFloatNullMissing( string $class ): void
    {
        $this->assertNull( $class::getFloatNull( name: 'missing' ));
    }



/* BOOL TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolGood( string $class ): void
    {
        $this->assertTrue( $class::getBool( name: 'bool_true' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolGoodString( string $class ): void
    {
        $this->assertTrue( $class::getBool( name: 'bool_string' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolGoodStringOff( string $class ): void
    {
        $this->assertFalse( $class::getBool( name: 'bool_off' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolWrongType( string $class ): void
    {
        $this->assertFalse( $class::getBool( name: 'int_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolMissing( string $class ): void
    {
        $this->assertFalse( $class::getBool( name: 'missing' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolDefault( string $class ): void
    {
        $this->assertTrue( $class::getBool( name: 'missing', default: true ));
    }


/* BOOL NULL TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolNullGood( string $class ): void
    {
        $this->assertTrue( $class::getBoolNull( name: 'bool_true' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolNullGoodString( string $class ): void
    {
        $this->assertTrue( $class::getBoolNull( name: 'bool_string' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolNullGoodStringOff( string $class ): void
    {
        $this->assertFalse( $class::getBoolNull( name: 'bool_off' ));
    }


    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolNullWrongType( string $class ): void
    {
        $this->assertNull( $class::getBoolNull( name: 'int_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetBoolNullMissing( string $class ): void
    {
        $this->assertNull( $class::getBoolNull( name: 'missing' ));
    }



/* ARRAY TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetArrayGood( string $class ): void
    {
        $this->assertSame( [1, 2, 3], $class::getArray( name: 'array_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetArrayWrongType( string $class ): void
    {
        $this->assertSame( [], $class::getArray( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetArrayMissing( string $class ): void
    {
        $this->assertSame( [], $class::getArray( name: 'missing' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetArrayDefault( string $class ): void
    {
        $this->assertSame( [1,2,3], $class::getArray( name: 'missing' , default: [1,2,3] ));
    }



/* ARRAY NULL TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetArrayNullGood( string $class ): void
    {
        $this->assertSame( [1, 2, 3], $class::getArrayNull( name: 'array_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetArrayNullWrongType( string $class ): void
    {
        $this->assertNull( $class::getArrayNull( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetArrayNullMissing( string $class ): void
    {
        $this->assertNull( $class::getArrayNull( name: 'missing' ));
    }


/* OBJECT TESTS
----------------------------------------------------------------------------- */


    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetObjectGood( string $class ): void
    {
        $this->assertSame( self::$testObject, $class::getObject( name: 'object_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetObjectWrongType( string $class ): void
    {
        $this->assertEquals( new stdClass(), $class::getObject( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetObjectMissing( string $class ): void
    {
        $this->assertEquals( new stdClass(), $class::getObject( name: 'missing' ));
    }


/* OBJECT NULL TESTS
----------------------------------------------------------------------------- */

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetObjectNullGood( string $class ): void
    {
        $this->assertSame( self::$testObject, $class::getObjectNull( name: 'object_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetObjectNullWrongType( string $class ): void
    {
        $this->assertNull( $class::getObjectNull( name: 'string_val' ));
    }

    /**
     * @param class-string<GT> $class
     */
    #[DataProvider('globalProvider')]
    public function testGetObjectNullMissing( string $class ): void
    {
        $this->assertNull( $class::getObjectNull( name: 'missing' ));
    }


/* SETUP FUNCTIONS
----------------------------------------------------------------------------- */

    public static function setUpBeforeClass(): void
    {
        $testData = [
            'string_val'  => 'hello',
            'int_val'     => 42,
            'int_string'  => '42',       // numeric string for getInt/getFloat
            'float_val'   => 3.14,
            'float_string'=> '3.14',     // numeric string for getFloat
            'bool_true'   => true,
            'bool_string' => 'true',     // string boolean for getBool
            'bool_off'    => 'off',      // string false for getBool
            'array_val'   => [ 1, 2, 3 ],
            'object_val'  => self::$testObject,
        ];

        $_COOKIE  = $testData;
        $_ENV     = $testData;
        $_FILES   = $testData;
        $_GET     = $testData;
        $_POST    = $testData;
        $_REQUEST = $testData;
        $_SERVER  = $testData;
        $_SESSION = $testData;

        foreach( $testData as $key => $value ) {
            $GLOBALS[$key] = $value;
        }
    }


    public static function globalProvider(): array
    {
        self::$testObject = new stdClass();

        return [
            'COOKIE'   => [ COOKIE::class ],
            'ENV'      => [ ENV::class  ],
            'FILES'    => [ FILES::class ],
            'GET'      => [ GET::class  ],
            'GLOBALS'  => [ GLOBALS::class ],
            'POST'     => [ POST::class ],
            'REQUEST'  => [ REQUEST::class ],
            'SERVER'   => [ SERVER::class ],
            'SESSION'  => [ SESSION::class ],
        ];
    }
}
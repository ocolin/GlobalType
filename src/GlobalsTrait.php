<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

trait GlobalsTrait
{

/* GLOBALS STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function globalString( string $name ) : string
    {
        return self::callString( value: $GLOBALS[$name] );
    }


/* GLOBALS STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function globalStringNull( string $name ) : string | null
    {
        return self::callStringNull( value: $GLOBALS[$name] );
    }



/* GLOBALS INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function globalInt( string $name ) : int
    {
        return self::callInt( value: $GLOBALS[$name] );
    }


/* GLOBALS INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function globalIntNull( string $name ) : int | null
    {
        return self::callIntNull( value: $GLOBALS[$name] );
    }



/* GLOBALS FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function globalFloat( string $name ) : float
    {
        return self::callFloat( value: $GLOBALS[$name] );
    }


/* GLOBALS FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function globalFloatNull( string $name ) : float | null
    {
        return self::callFloatNull( value: $GLOBALS[$name] );
    }



/* GLOBALS ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function globalArray( string $name ) : array
    {
        return self::callArray( value: $GLOBALS[$name] );
    }


/* GLOBALS ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function globalArrayNull( string $name ) : array | null
    {
        return self::callArrayNull( value: $GLOBALS[$name] );
    }



/* GLOBALS OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function globalObject( string $name ) : object
    {
        return self::callObject( value: $GLOBALS[$name] );
    }


/* GLOBALS OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function globalObjectNull( string $name ) : object | null
    {
        return self::callObjectNull( value: $GLOBALS[$name] );
    }
}
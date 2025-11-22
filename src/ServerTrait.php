<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

trait ServerTrait
{

/* SERVER STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function serverString( string $name ) : string
    {
        return self::callString( value: $_SERVER[$name] );
    }


/* SERVER STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function serverStringNull( string $name ) : string | null
    {
        return self::callStringNull( value: $_SERVER[$name] );
    }



/* SERVER INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function serverInt( string $name ) : int
    {
        return self::callInt( value: $_SERVER[$name] );
    }


/* SERVER INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function serverIntNull( string $name ) : int | null
    {
        return self::callIntNull( value: $_SERVER[$name] );
    }



/* SERVER FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function serverFloat( string $name ) : float
    {
        return self::callFloat( value: $_SERVER[$name] );
    }


/* SERVER FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function serverFloatNull( string $name ) : float | null
    {
        return self::callFloatNull( value: $_SERVER[$name] );
    }



/* SERVER ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function serverArray( string $name ) : array
    {
        return self::callArray( value: $_SERVER[$name] );
    }


/* SERVER ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function serverArrayNull( string $name ) : array | null
    {
        return self::callArrayNull( value: $_SERVER[$name] );
    }



/* SERVER OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function serverObject( string $name ) : object
    {
        return self::callObject( value: $_SERVER[$name] );
    }


/* SERVER OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function serverObjectNull( string $name ) : object | null
    {
        return self::callObjectNull( value: $_SERVER[$name] );
    }
}
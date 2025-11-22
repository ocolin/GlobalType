<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

trait GetTrait
{

/* GET STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function getString( string $name ) : string
    {
        return self::callString( value: $_GET[$name] );
    }


/* GET STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function getStringNull( string $name ) : string | null
    {
        return self::callStringNull( value: $_GET[$name] );
    }



/* GET INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function getInt( string $name ) : int
    {
        return self::callInt( value: $_GET[$name] );
    }


/* GET INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function getIntNull( string $name ) : int | null
    {
        return self::callIntNull( value: $_GET[$name] );
    }



/* GET FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function getFloat( string $name ) : float
    {
        return self::callFloat( value: $_GET[$name] );
    }


/* GET FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function getFloatNull( string $name ) : float | null
    {
        return self::callFloatNull( value: $_GET[$name] );
    }



/* GET ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function getArray( string $name ) : array
    {
        return self::callArray( value: $_GET[$name] );
    }


/* GET ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function getArrayNull( string $name ) : array | null
    {
        return self::callArrayNull( value: $_GET[$name] );
    }



/* GET OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function getObject( string $name ) : object
    {
        return self::callObject( value: $_GET[$name] );
    }


/* GET OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function getObjectNull( string $name ) : object | null
    {
        return self::callObjectNull( value: $_GET[$name] );
    }

}
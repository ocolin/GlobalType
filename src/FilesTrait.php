<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

trait FilesTrait
{

/* FILES STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function fileString( string $name ) : string
    {
        return self::callString( value: $_FILES[$name] );
    }


/* FILES STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function fileStringNull( string $name ) : string | null
    {
        return self::callStringNull( value: $_FILES[$name] );
    }



/* FILES INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function fileInt( string $name ) : int
    {
        return self::callInt( value: $_FILES[$name] );
    }


/* FILES INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function fileIntNull( string $name ) : int | null
    {
        return self::callIntNull( value: $_FILES[$name] );
    }



/* FILES FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function fileFloat( string $name ) : float
    {
        return self::callFloat( value: $_FILES[$name] );
    }


/* FILES FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function fileFloatNull( string $name ) : float | null
    {
        return self::callFloatNull( value: $_FILES[$name] );
    }



/* FILES ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function fileArray( string $name ) : array
    {
        return self::callArray( value: $_FILES[$name] );
    }


/* FILES ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function fileArrayNull( string $name ) : array | null
    {
        return self::callArrayNull( value: $_FILES[$name] );
    }



/* FILES OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function fileObject( string $name ) : object
    {
        return self::callObject( value: $_FILES[$name] );
    }


/* FILES OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function fileObjectNull( string $name ) : object | null
    {
        return self::callObjectNull( value: $_FILES[$name] );
    }
}
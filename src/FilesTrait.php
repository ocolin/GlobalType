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
    public static function filesString( string $name ) : string
    {
        return self::callString( value: $_FILES[$name] );
    }


/* FILES STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function filesStringNull( string $name ) : string | null
    {
        return self::callStringNull( value: $_FILES[$name] );
    }



/* FILES INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function filesInt( string $name ) : int
    {
        return self::callInt( value: $_FILES[$name] );
    }


/* FILES INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function filesIntNull( string $name ) : int | null
    {
        return self::callIntNull( value: $_FILES[$name] );
    }



/* FILES FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function filesFloat( string $name ) : float
    {
        return self::callFloat( value: $_FILES[$name] );
    }


/* FILES FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function filesFloatNull( string $name ) : float | null
    {
        return self::callFloatNull( value: $_FILES[$name] );
    }



/* FILES ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function filesArray( string $name ) : array
    {
        return self::callArray( value: $_FILES[$name] );
    }


/* FILES ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function filesArrayNull( string $name ) : array | null
    {
        return self::callArrayNull( value: $_FILES[$name] );
    }



/* FILES OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function filesObject( string $name ) : object
    {
        return self::callObject( value: $_FILES[$name] );
    }


/* FILES OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function filesObjectNull( string $name ) : object | null
    {
        return self::callObjectNull( value: $_FILES[$name] );
    }



/* FILES BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool Variable or false if not a boolean.
     */
    public static function filesBool( string $name ) : bool
    {
        return self::callBool( value: $_FILES[$name] );
    }



/* FILES BOOL NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool|null Variable or null if not a boolean.
     */
    public static function filesBoolNull( string $name ) : bool | null
    {
        return self::callBoolNull( value: $_FILES[$name] );
    }
}
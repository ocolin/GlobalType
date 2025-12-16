<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

use stdClass;

trait GlobalsTrait
{

/* GLOBALS STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function globalsString( string $name ) : string
    {
        if( !isset( $GLOBALS[ $name ] )) { return ''; }
        return self::callString( value: $GLOBALS[$name] );
    }


/* GLOBALS STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function globalsStringNull( string $name ) : string | null
    {
        if( !isset( $GLOBALS[ $name ] )) { return null; }
        return self::callStringNull( value: $GLOBALS[$name] );
    }



/* GLOBALS INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function globalsInt( string $name ) : int
    {
        if( !isset( $GLOBALS[ $name ] )) { return 0; }
        return self::callInt( value: $GLOBALS[$name] );
    }


/* GLOBALS INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function globalsIntNull( string $name ) : int | null
    {
        if( !isset( $GLOBALS[ $name ] )) { return null; }
        return self::callIntNull( value: $GLOBALS[$name] );
    }



/* GLOBALS FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function globalsFloat( string $name ) : float
    {
        if( !isset( $GLOBALS[ $name ] )) { return 0; }
        return self::callFloat( value: $GLOBALS[$name] );
    }


/* GLOBALS FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function globalsFloatNull( string $name ) : float | null
    {
        if( !isset( $GLOBALS[ $name ] )) { return null; }
        return self::callFloatNull( value: $GLOBALS[$name] );
    }



/* GLOBALS ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function globalsArray( string $name ) : array
    {
        if( !isset( $GLOBALS[ $name ] )) { return []; }
        return self::callArray( value: $GLOBALS[$name] );
    }


/* GLOBALS ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function globalsArrayNull( string $name ) : array | null
    {
        if( !isset( $GLOBALS[ $name ] )) { return null; }
        return self::callArrayNull( value: $GLOBALS[$name] );
    }



/* GLOBALS OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function globalsObject( string $name ) : object
    {
        if( !isset( $GLOBALS[ $name ] )) { return new stdClass(); }
        return self::callObject( value: $GLOBALS[$name] );
    }


/* GLOBALS OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function globalsObjectNull( string $name ) : object | null
    {
        if( !isset( $GLOBALS[ $name ] )) { return null; }
        return self::callObjectNull( value: $GLOBALS[$name] );
    }



/* GLOBALS BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool Variable or false if not a boolean.
     */
    public static function globalsBool( string $name ) : bool
    {
        if( !isset( $GLOBALS[ $name ] )) { return false; }
        return self::callBool( value: $GLOBALS[$name] );
    }



/* GLOBALS BOOL NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool|null Variable or null if not a boolean.
     */
    public static function globalsBoolNull( string $name ) : bool | null
    {
        if( !isset( $GLOBALS[ $name ] )) { return null; }
        return self::callBoolNull( value: $GLOBALS[$name] );
    }
}
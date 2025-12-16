<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

use stdClass;

trait RequestTrait
{

/* REQUEST STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function requestString( string $name ) : string
    {
        if( !isset( $_REQUEST[ $name ] )) { return ''; }
        return self::callString( value: $_REQUEST[$name] );
    }


/* REQUEST STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function requestStringNull( string $name ) : string | null
    {
        if( !isset( $_REQUEST[ $name ] )) { return null; }
        return self::callStringNull( value: $_REQUEST[$name] );
    }



/* REQUEST INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function requestInt( string $name ) : int
    {
        if( !isset( $_REQUEST[ $name ] )) { return 0 ; }
        return self::callInt( value: $_REQUEST[$name] );
    }


/* REQUEST INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function requestIntNull( string $name ) : int | null
    {
        if( !isset( $_REQUEST[ $name ] )) { return null; }
        return self::callIntNull( value: $_REQUEST[$name] );
    }



/* REQUEST FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function requestFloat( string $name ) : float
    {
        if( !isset( $_REQUEST[ $name ] )) { return 0; }
        return self::callFloat( value: $_REQUEST[$name] );
    }



/* REQUEST FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function requestFloatNull( string $name ) : float | null
    {
        if( !isset( $_REQUEST[ $name ] )) { return null; }
        return self::callFloatNull( value: $_REQUEST[$name] );
    }



/* REQUEST ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function requestArray( string $name ) : array
    {
        if( !isset( $_REQUEST[ $name ] )) { return []; }
        return self::callArray( value: $_REQUEST[$name] );
    }


/* REQUEST ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function requestArrayNull( string $name ) : array | null
    {
        if( !isset( $_REQUEST[ $name ] )) { return null; }
        return self::callArrayNull( value: $_REQUEST[$name] );
    }



/* REQUEST OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function requestObject( string $name ) : object
    {
        if( !isset( $_REQUEST[ $name ] )) { return new stdClass (); }
        return self::callObject( value: $_REQUEST[$name] );
    }


/* REQUEST OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function requestObjectNull( string $name ) : object | null
    {
        if( !isset( $_REQUEST[ $name ] )) { return null; }
        return self::callObjectNull( value: $_REQUEST[$name] );
    }



/* REQUEST BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool Variable or false if not a boolean.
     */
    public static function requestBool( string $name ) : bool
    {
        if( !isset( $_REQUEST[ $name ] )) { return false; }
        return self::callBool( value: $_REQUEST[$name] );
    }



/* REQUEST BOOL NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool|null Variable or null if not a boolean.
     */
    public static function requestBoolNull( string $name ) : bool | null
    {
        if( !isset( $_REQUEST[ $name ] )) { return null; }
        return self::callBoolNull( value: $_REQUEST[$name] );
    }
}
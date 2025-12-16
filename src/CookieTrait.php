<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

use stdClass;

trait CookieTrait
{

/* COOKIE STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function cookieString( string $name ) : string
    {
        if( !isset( $_COOKIE[ $name ] )) { return ''; }
        return self::callString( value: $_COOKIE[$name] );
    }


/* COOKIE STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function cookieStringNull( string $name ) : string | null
    {
        if( !isset( $_COOKIE[ $name ] )) { return null; }
        return self::callStringNull( value: $_COOKIE[$name] );
    }



/* COOKIE INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function cookieInt( string $name ) : int
    {
        if( !isset( $_COOKIE[ $name ] )) { return 0; }
        return self::callInt( value: $_COOKIE[$name] );
    }


/* COOKIE INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function cookieIntNull( string $name ) : int | null
    {
        if( !isset( $_COOKIE[ $name ] )) { return null; }
        return self::callIntNull( value: $_COOKIE[$name] );
    }



/* COOKIE FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function cookieFloat( string $name ) : float
    {
        if( !isset( $_COOKIE[ $name ] )) { return 0; }
        return self::callFloat( value: $_COOKIE[$name] );
    }


/* COOKIE FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function cookieFloatNull( string $name ) : float | null
    {
        if( !isset( $_COOKIE[ $name ] )) { return null; }
        return self::callFloatNull( value: $_COOKIE[$name] );
    }



/* COOKIE ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function cookieArray( string $name ) : array
    {
        if( !isset( $_COOKIE[ $name ] )) { return []; }
        return self::callArray( value: $_COOKIE[$name] );
    }


/* COOKIE ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function cookieArrayNull( string $name ) : array | null
    {
        if( !isset( $_COOKIE[ $name ] )) { return null; }
        return self::callArrayNull( value: $_COOKIE[$name] );
    }



/* COOKIE OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function cookieObject( string $name ) : object
    {
        if( !isset( $_COOKIE[ $name ] )) { return new stdClass (); }
        return self::callObject( value: $_COOKIE[$name] );
    }


/* COOKIE OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function cookieObjectNull( string $name ) : object | null
    {
        if( !isset( $_COOKIE[ $name ] )) { return null; }
        return self::callObjectNull( value: $_COOKIE[$name] );
    }



/* COOKIE BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool Variable or false if not a boolean.
     */
    public static function cookieBool( string $name ) : bool
    {
        if( !isset( $_COOKIE[ $name ] )) { return false; }
        return self::callBool( value: $_COOKIE[$name] );
    }



/* COOKIE BOOL NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool|null Variable or null if not a boolean.
     */
    public static function cookieBoolNull( string $name ) : bool | null
    {
        if( !isset( $_COOKIE[ $name ] )) { return null; }
        return self::callBoolNull( value: $_COOKIE[$name] );
    }
}
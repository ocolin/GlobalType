<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

use stdClass;

trait SessionTrait
{

/* SESSION STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function sessionString( string $name ) : string
    {
        if( !isset( $_SESSION[ $name ] )) { return ''; }
        return self::callString( value: $_SESSION[$name] );
    }


/* SESSION STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function sessionStringNull( string $name ) : string | null
    {
        if( !isset( $_SESSION[ $name ] )) { return null; }
        return self::callStringNull( value: $_SESSION[$name] );
    }



/* SESSION INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function sessionInt( string $name ) : int
    {
        if( !isset( $_SESSION[ $name ] )) { return 0; }
        return self::callInt( value: $_SESSION[$name] );
    }


/* SESSION INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function sessionIntNull( string $name ) : int | null
    {
        if( !isset( $_SESSION[ $name ] )) { return null; }
        return self::callIntNull( value: $_SESSION[$name] );
    }



/* SESSION FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function sessionFloat( string $name ) : float
    {
        if( !isset( $_SESSION[ $name ] )) { return 0; }
        return self::callFloat( value: $_SESSION[$name] );
    }


/* SESSION FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function sessionFloatNull( string $name ) : float | null
    {
        if( !isset( $_SESSION[ $name ] )) { return null; }
        return self::callFloatNull( value: $_SESSION[$name] );
    }



/* SESSION ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function sessionArray( string $name ) : array
    {
        if( !isset( $_SESSION[ $name ] )) { return []; }
        return self::callArray( value: $_SESSION[$name] );
    }


/* SESSION ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function sessionArrayNull( string $name ) : array | null
    {
        if( !isset( $_SESSION[ $name ] )) { return null; }
        return self::callArrayNull( value: $_SESSION[$name] );
    }



/* SESSION OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function sessionObject( string $name ) : object
    {
        if( !isset( $_SESSION[ $name ] )) { return new stdClass(); }
        return self::callObject( value: $_SESSION[$name] );
    }


/* SESSION OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function sessionObjectNull( string $name ) : object | null
    {
        if( !isset( $_SESSION[ $name ] )) { return null; }
        return self::callObjectNull( value: $_SESSION[$name] );
    }



/* SESSION BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool Variable or false if not a boolean.
     */
    public static function sessionBool( string $name ) : bool
    {
        if( !isset( $_SESSION[ $name ] )) { return false; }
        return self::callBool( value: $_SESSION[$name] );
    }



/* SESSION BOOL NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool|null Variable or null if not a boolean.
     */
    public static function sessionBoolNull( string $name ) : bool | null
    {
        if( !isset( $_SESSION[ $name ] )) { return null; }
        return self::callBoolNull( value: $_SESSION[$name] );
    }
}
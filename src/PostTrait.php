<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

use stdClass;

trait PostTrait
{

/* POST STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function postString( string $name ) : string
    {
        if( !isset( $_POST[ $name ] )) { return ''; }
        return self::callString( value: $_POST[$name] );
    }


/* POST STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function postStringNull( string $name ) : string | null
    {
        if( !isset( $_POST[ $name ] )) { return null; }
        return self::callStringNull( value: $_POST[$name] );
    }



/* POST INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function postInt( string $name ) : int
    {
        if( !isset( $_POST[ $name ] )) { return 0; }
        return self::callInt( value: $_POST[$name] );
    }


/* POST INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function postIntNull( string $name ) : int | null
    {
        if( !isset( $_POST[ $name ] )) { return null; }
        return self::callIntNull( value: $_POST[$name] );
    }



/* POST FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function postFloat( string $name ) : float
    {
        if( !isset( $_POST[ $name ] )) { return 0; }
        return self::callFloat( value: $_POST[$name] );
    }


/* POST FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function postFloatNull( string $name ) : float | null
    {
        if( !isset( $_POST[ $name ] )) { return null; }
        return self::callFloatNull( value: $_POST[$name] );
    }



/* POST ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function postArray( string $name ) : array
    {
        if( !isset( $_POST[ $name ] )) { return []; }
        return self::callArray( value: $_POST[$name] );
    }


/* POST ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function postArrayNull( string $name ) : array | null
    {
        if( !isset( $_POST[ $name ] )) { return null; }
        return self::callArrayNull( value: $_POST[$name] );
    }



/* POST OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function postObject( string $name ) : object
    {
        if( !isset( $_POST[ $name ] )) { return new stdClass(); }
        return self::callObject( value: $_POST[$name] );
    }


/* POST OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function postObjectNull( string $name ) : object | null
    {
        if( !isset( $_POST[ $name ] )) { return null; }
        return self::callObjectNull( value: $_POST[$name] );
    }



/* POST BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool Variable or false if not a boolean.
     */
    public static function postBool( string $name ) : bool
    {
        if( !isset( $_POST[ $name ] )) { return false; }
        return self::callBool( value: $_POST[$name] );
    }



/* POST BOOL NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool|null Variable or null if not a boolean.
     */
    public static function postBoolNull( string $name ) : bool | null
    {
        if( !isset( $_POST[ $name ] )) { return null; }
        return self::callBoolNull( value: $_POST[$name] );
    }
}
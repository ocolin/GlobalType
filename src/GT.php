<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

use stdClass;

class GT
{

use GetTrait;

use PostTrait;

use EnvTrait;

use RequestTrait;

use ServerTrait;

use SessionTrait;

use GlobalsTrait;

use CookieTrait;

use FilesTrait;


/* GET STRING
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return string Variable or empty string if not a string.
     */
    public static function callString( mixed $value ) : string
    {
        if( !isset( $value ) OR !is_string( $value )) { return ''; }

        return $value;
    }


/* GET STRING OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return string|null Variable or null if not a string.
     */
    public static function callStringNull( mixed $value ) : string | null
    {
        if( !isset( $value ) OR !is_string( $value )) { return null; }

        return $value;
    }


/* GET INTEGER
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return int Integer or zero if not an int.
     */
    public static function callInt( mixed $value ) : int
    {
        if( !isset( $value ) OR !is_int( $value )) { return 0; }

        return $value;
    }


/* GET INTEGER OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return int|null Variable or null if not an int.
     */
    public static function callIntNull( mixed $value ) : int | null
    {
        if( !isset( $value ) OR !is_int( $value )) { return null; }

        return $value;
    }


/* GET FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return float Variable or zero if not a float.
     */
    public static function callFloat( mixed $value ) : float
    {
        if( !isset( $value ) OR !is_float( $value )) { return 0; }

        return $value;
    }


/* GET FLOAT OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return float|null Variable or null if not a float.
     */
    public static function callFloatNull( mixed $value ) : float | null
    {
        if( !isset( $value ) OR !is_float( $value )) { return null; }

        return $value;
    }


/* GET ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function callArray( mixed $value ) : array
    {
        if( !isset( $value ) OR !is_array( $value )) { return []; }

        return $value;
    }


/* GET ARRAY OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check
     * @return array<mixed>|null Value or null if not matching type.
     */

    public static function callArrayNull( mixed $value ) : array | null
    {
        if( !isset( $value ) OR !is_array( $value )) { return null; }

        return $value;
    }


/* GET OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return object Variable or empty object if not an object.
     */
    public static function callObject( mixed $value ) : object
    {
        if( !isset( $value ) OR !is_object( $value )) { return new stdClass(); }

        return $value;
    }


/* GET OBJECT OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param mixed $value Value to check.
     * @return object|null Variable or null if not an object.
     */
    public static function callObjectNull( mixed $value ) : object | null
    {
        if( !isset( $value ) OR !is_object( $value )) { return null; }

        return $value;
    }
}
<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

trait EnvTrait
{

/* ENV STRING
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string Variable or empty string if not the right type.
     */
    public static function envString( string $name ) : string
    {
        return self::callString( value: $_ENV[$name] );
    }


/* ENV STRING NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return string|null Variable or null if not a string.
     */
    public static function envStringNull( string $name ) : string | null
    {
        return self::callStringNull( value: $_ENV[$name] );
    }



/* ENV INT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int Variable or zero if not an integer.
     */
    public static function envInt( string $name ) : int
    {
        return self::callInt( value: $_ENV[$name] );
    }


/* ENV INT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return int|null Integer of null if not an integer.
     */
    public static function envIntNull( string $name ) : int | null
    {
        return self::callIntNull( value: $_ENV[$name] );
    }



/* ENV FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float Variable or 0 if not a float.
     */
    public static function envFloat( string $name ) : float
    {
        return self::callFloat( value: $_ENV[$name] );
    }


/* ENV FLOAT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return float|null Variable or null if not a float.
     */
    public static function envFloatNull( string $name ) : float | null
    {
        return self::callFloatNull( value: $_ENV[$name] );
    }



/* ENV ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed> Variable or empty array if not an array.
     */
    public static function envArray( string $name ) : array
    {
        return self::callArray( value: $_ENV[$name] );
    }


/* ENV ARRAY NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return array<mixed>|null Variable or null if not matching type.
     */
    public static function envArrayNull( string $name ) : array | null
    {
        return self::callArrayNull( value: $_ENV[$name] );
    }



/* ENV OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object Variable or empty object if not found.
     */
    public static function envObject( string $name ) : object
    {
        return self::callObject( value: $_ENV[$name] );
    }


/* ENV OBJECT NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return object|null Variable or null if not an object.
     */
    public static function envObjectNull( string $name ) : object | null
    {
        return self::callObjectNull( value: $_ENV[$name] );
    }



/* ENV BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool Variable or false if not a boolean.
     */
    public static function envBool( string $name ) : bool
    {
        return self::callBool( value: $_ENV[$name] );
    }



/* ENV BOOL NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of variable.
     * @return bool|null Variable or null if not a boolean.
     */
    public static function envBoolNull( string $name ) : bool | null
    {
        return self::callBoolNull( value: $_ENV[$name] );
    }
}
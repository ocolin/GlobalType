<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

use stdClass;

abstract class GT
{
    /**
     * @return array<mixed> Global to check.
     */
    abstract protected static function source(): array;


/* GET STRING VALUE
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @param string|null $default Optional string to return.
     * @return string String to return.
     */
    public static function getString( string $name, ?string $default = null ) : string
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_string( $global[$name] )) {
            return $global[$name];
        }

        return $default ?? '';
    }


/* GET STRING VALUE OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property
     * @return string|null String to return.
     */
    public static function getStringNull( string $name ) : ?string
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_string( $global[$name] )) {
            return $global[$name];
        }

        return null;
    }



/* GET INTEGER
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property
     * @param int|null $default Optional integer to return.
     * @return int Integer to return.
     */
    public static function getInt( string $name, ?int $default = null ) : int
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_numeric( $global[$name] )) {
            return (int)$global[$name];
        }

        return $default ?? 0;
    }



/* GET INTEGER OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @return int|null Integer or null ro return.
     */
    public static function getIntNull( string $name ) : ?int
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_numeric( $global[$name] )) {
            return (int)$global[$name];
        }

        return null;
    }



/* GET FLOAT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @param float|null $default Optional float to return.
     * @return float Float to return.
     */
    public static function getFloat( string $name, ?float $default = null ) : float
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_numeric( $global[$name] )) {
            return (float)$global[$name];
        }

        return $default ?? 0.0;
    }



/* GET FLOAT OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @return float|null Float or null to return.
     */
    public static function getFloatNull( string $name ) : ?float
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_numeric( $global[$name] )) {
            return (float)$global[$name];
        }

        return null;
    }



/* GET BOOL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property
     * @param bool|null $default Boolean to return.
     * @return bool
     */
    public static function getBool( string $name, ?bool $default = null ) : bool
    {
        $global = static::source();

        if( isset( $global[$name])) {
            $result = filter_var(
                  value: $global[$name],
                 filter: FILTER_VALIDATE_BOOLEAN,
                options: FILTER_NULL_ON_FAILURE
            );
            if( $result !== null ) { return $result; }
        }

        return $default ?? false;
    }



/* GET BOOL OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @return bool|null Boolean or null to return.
     */
    public static function getBoolNull( string $name ) : ?bool
    {
        $global = static::source();

        if( isset( $global[$name])) {
            $result = filter_var(
                  value: $global[$name],
                 filter: FILTER_VALIDATE_BOOLEAN,
                options: FILTER_NULL_ON_FAILURE
            );
            if( $result !== null ) { return $result; }
        }

        return null;
    }



/* GET ARRAY
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @param array<mixed>|null $default Optional array to return.
     * @return array<mixed> Array to return.
     */
    public static function getArray( string $name, ?array $default = null ) : array
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_array( $global[$name] )) {
            return $global[$name];
        }

        return $default ?? [];
    }



/* GET ARRAY OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @return array<mixed>|null Array or null.
     */
    public static function getArrayNull( string $name ) : ?array
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_array( $global[$name] )) {
            return $global[$name];
        }

        return null;
    }



/* GET OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @param object|null $default Optional object.
     * @return object Object to return.
     */
    public static function getObject( string $name, ?object $default = null ) : object
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_object( $global[$name] )) {
            return $global[$name];
        }

        return $default ?? new stdClass;
    }



/* GET OBJECT OR NULL
----------------------------------------------------------------------------- */

    /**
     * @param string $name Name of global property.
     * @return object|null Object or null.
     */
    public static function getObjectNull( string $name ) : ?object
    {
        $global = static::source();

        if( isset( $global[$name]) AND is_object( $global[$name] )) {
            return $global[$name];
        }

        return null;
    }
}
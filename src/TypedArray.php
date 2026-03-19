<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

class TypedArray extends GT
{
    /**
     * @var array<mixed>
     */
    private static array $data = [];

    /**
     * @param array<mixed>|object $data
     * @return void
     */
    public static function load( array|object $data ): void
    {
        self::$data = (array)$data;
    }

    protected static function source(): array { return self::$data; }
}
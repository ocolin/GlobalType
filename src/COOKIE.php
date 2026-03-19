<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

class COOKIE extends GT
{
    protected static function source(): array { return $_COOKIE; }
}
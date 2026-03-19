<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

class GET extends GT
{
    protected static function source(): array { return $_GET; }
}
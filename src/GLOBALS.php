<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

class GLOBALS extends GT
{
    protected static function source(): array { return $GLOBALS; }
}
<?php

declare( strict_types = 1 );

namespace Ocolin\GlobalType;

class POST extends GT
{
    protected static function source(): array { return $_POST; }
}
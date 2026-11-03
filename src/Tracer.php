<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

final class Tracer
{
    public function startSpan()
    {
        return null;
    }
    public function currentSpan()
    {
        return null;
    }
    public function withSpan()
    {
        $clone = clone $this; return $clone;
    }
}

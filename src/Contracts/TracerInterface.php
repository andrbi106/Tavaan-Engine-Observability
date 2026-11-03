<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability\Contracts;

/**
 * قرارداد Tracer.
 *
 * @see \Tavaan\Engine\Observability\Tracer
 * @api 1.0
 */
interface TracerInterface
{
    /**
     * متد startSpan.
     *
     * @return mixed
     */
    public function startSpan(/* ... */): mixed;

    /**
     * متد currentSpan.
     *
     * @return mixed
     */
    public function currentSpan(/* ... */): mixed;

    /**
     * متد withSpan.
     *
     * @return mixed
     */
    public function withSpan(/* ... */): mixed;
}
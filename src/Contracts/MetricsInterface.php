<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability\Contracts;

/**
 * قرارداد Metrics.
 *
 * @see \Tavaan\Engine\Observability\Metrics
 * @api 1.0
 */
interface MetricsInterface
{
    /**
     * متد counter.
     *
     * @return mixed
     */
    public function counter(/* ... */): mixed;

    /**
     * متد gauge.
     *
     * @return mixed
     */
    public function gauge(/* ... */): mixed;

    /**
     * متد histogram.
     *
     * @return mixed
     */
    public function histogram(/* ... */): mixed;

    /**
     * متد timer.
     *
     * @return mixed
     */
    public function timer(/* ... */): mixed;

    /**
     * متد collect.
     *
     * @return mixed
     */
    public function collect(/* ... */): mixed;
}
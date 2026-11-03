<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability\Contracts;

/**
 * قرارداد Health.
 *
 * @see \Tavaan\Engine\Observability\Health
 * @api 1.0
 */
interface HealthInterface
{
    /**
     * متد add.
     *
     * @return mixed
     */
    public function add(/* ... */): mixed;

    /**
     * متد check.
     *
     * @return mixed
     */
    public function check(/* ... */): mixed;

    /**
     * متد live.
     *
     * @return mixed
     */
    public function live(/* ... */): mixed;

    /**
     * متد ready.
     *
     * @return mixed
     */
    public function ready(/* ... */): mixed;
}
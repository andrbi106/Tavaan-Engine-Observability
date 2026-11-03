<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Health — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Observability\Contracts\HealthInterface
 */
final class Health implements Contracts\HealthInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function add(/* ... */): mixed
    {
        // TODO: پیاده‌سازی add مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function check(/* ... */): mixed
    {
        // TODO: پیاده‌سازی check مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function live(/* ... */): mixed
    {
        // TODO: پیاده‌سازی live مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function ready(/* ... */): mixed
    {
        // TODO: پیاده‌سازی ready مطابق مستندات (سند §3 API).
        return null;
    }
}
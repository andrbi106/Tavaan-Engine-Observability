<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Metrics — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Observability\Contracts\MetricsInterface
 */
final class Metrics implements Contracts\MetricsInterface
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
    public function counter(/* ... */): mixed
    {
        // TODO: پیاده‌سازی counter مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function gauge(/* ... */): mixed
    {
        // TODO: پیاده‌سازی gauge مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function histogram(/* ... */): mixed
    {
        // TODO: پیاده‌سازی histogram مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function timer(/* ... */): mixed
    {
        // TODO: پیاده‌سازی timer مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(/* ... */): mixed
    {
        // TODO: پیاده‌سازی collect مطابق مستندات (سند §3 API).
        return null;
    }
}
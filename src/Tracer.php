<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Tracer — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Observability\Contracts\TracerInterface
 */
final class Tracer implements Contracts\TracerInterface
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
    public function startSpan(/* ... */): mixed
    {
        // TODO: پیاده‌سازی startSpan مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function currentSpan(/* ... */): mixed
    {
        // TODO: پیاده‌سازی currentSpan مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function withSpan(/* ... */): mixed
    {
        // TODO: پیاده‌سازی withSpan مطابق مستندات (سند §3 API).
        return null;
    }
}
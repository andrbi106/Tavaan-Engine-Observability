<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Observability\Contracts\MetricsInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * MetricsServiceProvider — ثبت سرویس‌های موتور Metrics.
 */
final class MetricsServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(MetricsInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Metrics($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            MetricsInterface::class,
        ];
    }
}
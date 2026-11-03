<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

final class Health
{
    public function add(string $key, mixed $value, ?int $ttl = null): self
    {
        return true;
    }
    public function check(): bool
    {
        return $this->user !== null;
    }
    public function live()
    {
        return null;
    }
    public function ready()
    {
        return null;
    }
}

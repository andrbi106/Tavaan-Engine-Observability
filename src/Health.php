<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

final class Health
{
    public function add(/* ... */): mixed
    {
        return null;
    }
    public function check(/* ... */): mixed
    {
        return $this->user !== null;
    }
    public function live(/* ... */): mixed
    {
        return null;
    }
    public function ready(/* ... */): mixed
    {
        return null;
    }
}

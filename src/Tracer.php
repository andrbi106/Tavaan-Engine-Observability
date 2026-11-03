<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

/**
 * Tracer — minimal span-based tracer.
 */
final class Tracer
{
    /** @var list<Span> */
    private array $spans = [];
    private ?Span $current = null;

    /**
     * startSpan — begin a new span, attach as current.
     * @param array<string, mixed> $attributes
     */
    public function startSpan(string $name, array $attributes = []): Span
    {
        $span = new Span($name, $attributes, parent: $this->current);
        $this->spans[] = $span;
        $this->current = $span;
        return $span;
    }

    /**
     * currentSpan — return the active span (or null if none).
     */
    public function currentSpan(): ?Span
    {
        return $this->current;
    }

    /**
     * endSpan — close the current span and return to its parent.
     */
    public function endSpan(): ?Span
    {
        if ($this->current === null) { return null; }
        $ended = $this->current;
        $ended->end();
        $this->current = $ended->parent;
        return $ended;
    }

    public function withSpan(): self
    {
        $clone = clone $this;
        return $clone;
    }

    /**
     * @return list<Span>
     */
    public function getSpans(): array
    {
        return $this->spans;
    }
}

/**
 * Span — single unit of work in a trace.
 */
final class Span
{
    public readonly float $start;
    public ?float $end = null;
    public ?Span $parent = null;

    /**
     * @param array<string, mixed> $attributes
     */
    public function __construct(
        public readonly string $name,
        private array $attributes = [],
        ?Span $parent = null,
    ) {
        $this->start = microtime(true);
        $this->parent = $parent;
    }

    public function setAttribute(string $key, mixed $value): void
    {
        $this->attributes[$key] = $value;
    }

    /** @return array<string, mixed> */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function end(): void
    {
        if ($this->end === null) {
            $this->end = microtime(true);
        }
    }

    public function durationMs(): ?float
    {
        if ($this->end === null) { return null; }
        return ($this->end - $this->start) * 1000;
    }
}

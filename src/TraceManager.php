<?php

declare(strict_types=1);

namespace Tavaan\Engine\Observability;

/**
 * Span — یک span در distributed tracing.
 */
final class Span
{
    public string $spanId;
    public string $traceId;
    public int $startTime;
    public ?int $endTime = null;
    public string $status = 'ok';
    /** @var array<string, mixed> */
    public array $attributes = [];

    public function __construct(string $name, ?string $parentTraceId = null)
    {
        $this->spanId = \bin2hex(\random_bytes(8));
        $this->traceId = $parentTraceId ?? \bin2hex(\random_bytes(16));
        $this->startTime = (int) (\microtime(true) * 1_000_000);
        $this->attributes['name'] = $name;
    }

    public function setAttribute(string $key, mixed $value): self
    {
        $this->attributes[$key] = $value;
        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function end(): void
    {
        $this->endTime = (int) (\microtime(true) * 1_000_000);
    }

    public function durationMs(): float
    {
        $end = $this->endTime ?? (int) (\microtime(true) * 1_000_000);
        return ($end - $this->startTime) / 1000.0;
    }
}

/**
 * TraceManager — مدیریت spans.
 */
final class TraceManager
{
    /** @var list<Span> */
    private array $spans = [];

    public function startSpan(string $name, array $attributes = []): Span
    {
        $span = new Span($name);
        foreach ($attributes as $k => $v) $span->setAttribute($k, $v);
        $this->spans[] = $span;
        return $span;
    }

    /** @return list<Span> */
    public function spans(): array
    {
        return $this->spans;
    }

    public function clear(): void
    {
        $this->spans = [];
    }

    /**
     * W3C traceparent header format.
     */
    public function traceparent(Span $span): string
    {
        return \sprintf('00-%s-%s-01', $span->traceId, $span->spanId);
    }
}

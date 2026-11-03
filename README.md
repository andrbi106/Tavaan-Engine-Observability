# Tavaan Engine — Observability

> **رصدپذیری** — موتور Observability در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.observability` |
| نام | `Observability` |
| عنوان فارسی | رصدپذیری |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Observability` |
| نوع | `engine` |
| Facade | `Metrics` (accessor: `metrics`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Observability\Contracts\MetricsInterface`
- `Tavaan\Engine\Observability\Contracts\SpanExporterInterface`
- `Tavaan\Engine\Observability\Contracts\SpanInterface`
- `Tavaan\Engine\Observability\Contracts\StatusCode`

## خطاها (Exceptions)

- `Tavaan\Engine\Observability\Exceptions\ObservabilityException`

## Facadeها

- `Tavaan\Engine\Observability\Facades\Metrics`
- `Tavaan\Engine\Observability\Facades\Trace`

## کلاس‌های اصلی

- `src/DebugBar/DebugBar.php`
- `src/DebugBar/DebugBarMiddleware.php`
- `src/DebugBar/Stopwatch.php`
- `src/Health.php`
- `src/Health/CheckResult.php`
- `src/Health/Down.php`
- `src/Health/HealthManager.php`
- `src/Health/Up.php`
- `src/Http/MetricsMiddleware.php`
- `src/Metrics.php`
- `src/Metrics/Metric.php`
- `src/Metrics/MetricsRegistry.php`
- `src/Metrics/PrometheusFormatter.php`
- `src/Metrics/Summary.php`
- `src/Metrics/Types.php`
- `src/MetricsManager.php`
- `src/ObservabilityServiceProvider.php`
- `src/Span.php`
- `src/TraceManager.php`
- `src/Tracer.php`
- ... و 8 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Observability\ObservabilityServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `log`

## پیکربندی

- فایل پیکربندی: `config/observability.php`
- کلید: `observability`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Observability.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Observability`** (این مخزن) | موتور Observability |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.

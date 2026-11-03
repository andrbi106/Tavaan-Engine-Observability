<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Observability Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور observability — همهٔ کلیدهای مستندشده در `docs/03-engines/observability.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/observability.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('OBSERVABILITY_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('OBSERVABILITY_PREFIX', 'observability:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('OBSERVABILITY_LOG_CHANNEL', 'observability'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];
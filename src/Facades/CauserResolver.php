<?php

namespace Madhurasri\Activitylog\Facades;

use Illuminate\Support\Facades\Facade;
use Madhurasri\Activitylog\CauserResolver as ActivitylogCauserResolver;

/**
 * @method static \Illuminate\Database\Eloquent\Model|null resolve(\Illuminate\Database\Eloquent\Model|int|string|null $subject = null)
 * @method static \Madhurasri\Activitylog\CauserResolver resolveUsing(\Closure $callback)
 * @method static \Madhurasri\Activitylog\CauserResolver setCauser(\Illuminate\Database\Eloquent\Model|null $causer)
 *
 * @see \Madhurasri\Activitylog\CauserResolver
 */
class CauserResolver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ActivitylogCauserResolver::class;
    }
}

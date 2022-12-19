<?php

namespace Madhurasri\Activitylog\Contracts;

use Closure;
use Madhurasri\Activitylog\EventLogBag;

interface LoggablePipe
{
    public function handle(EventLogBag $event, Closure $next): EventLogBag;
}

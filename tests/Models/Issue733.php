<?php

namespace Madhurasri\Activitylog\Test\Models;

use Madhurasri\Activitylog\LogOptions;
use Madhurasri\Activitylog\Traits\LogsActivity;

class Issue733 extends Article
{
    use LogsActivity;

    protected static $recordEvents = [
        'retrieved',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->dontSubmitEmptyLogs()
        ->logOnly(['name']);
    }
}

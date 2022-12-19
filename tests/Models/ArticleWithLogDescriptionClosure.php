<?php

namespace Madhurasri\Activitylog\Test\Models;

use Madhurasri\Activitylog\LogOptions;
use Madhurasri\Activitylog\Traits\LogsActivity;

class ArticleWithLogDescriptionClosure extends Article
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->setDescriptionForEvent(function ($eventName) {
                return $eventName;
            });
    }
}

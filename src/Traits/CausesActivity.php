<?php

namespace Madhurasri\Activitylog\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Madhurasri\Activitylog\ActivitylogServiceProvider;

trait CausesActivity
{
    public function actions(): MorphMany
    {
        return $this->morphMany(
            ActivitylogServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}

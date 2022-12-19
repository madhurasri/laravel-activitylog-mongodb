<?php

namespace Madhurasri\Activitylog\Test\Models;

use Madhurasri\Activitylog\Models\Activity;

class CustomDatabaseConnectionOnActivityModel extends Activity
{
    protected $connection = 'custom_connection_name';
}

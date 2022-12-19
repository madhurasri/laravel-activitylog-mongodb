<?php

namespace Madhurasri\Activitylog\Test\Models;

use Madhurasri\Activitylog\Models\Activity;

class CustomTableNameOnActivityModel extends Activity
{
    protected $table = 'custom_table_name';
}

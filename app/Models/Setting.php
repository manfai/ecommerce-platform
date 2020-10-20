<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OptimistDigital\NovaSettings\Models\Settings;

class Setting extends Settings
{
    protected $table = 'settings';
    
}

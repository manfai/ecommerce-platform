<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'code', 'title', 'description', 'provider', 'enable',
    ];
    protected $casts = [
        'enable' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
}

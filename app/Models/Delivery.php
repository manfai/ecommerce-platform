<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Delivery extends Model
{
    use HasTranslations;
    protected $fillable = [
        'code', 'title', 'description', 'provider', 'enable',
    ];
    protected $casts = [
        'enable' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    public $translatable = ['title','description'];
    
}

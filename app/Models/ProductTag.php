<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    public $timestamps = false;

    protected $guarded=[];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

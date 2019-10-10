<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTrans extends Model
{
    protected $fillable = ['title', 'description', 'extra'];

    public function model()
    {
        return $this->morphTo();
    }

}

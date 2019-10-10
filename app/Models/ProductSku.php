<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\InternalException;

class ProductSku extends Model
{
    protected $fillable = ['code', 'title', 'description', 'price', 'stock'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function language()
    {
        return $this->morphMany('App\Models\ProductTrans', 'model');
    }


    // 庫存管理
    public function decreaseStock($qty)
    {
        if ($qty < 0) {
            throw new InternalException('減庫存不可小於0');
        }

        return $this->where('id', $this->id)->where('stock', '>=', $qty)->decrement('stock', $qty);
    }

    public function addStock($qty)
    {
        if ($qty < 0) {
            throw new InternalException('加庫存不可小於0');
        }
        $this->increment('stock', $qty);
    }
    
}

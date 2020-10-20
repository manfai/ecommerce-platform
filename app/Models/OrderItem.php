<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OrderItem extends Model
{
    use LogsActivity;
    
    protected $fillable = ['qty', 'price', 'rating', 'review', 'reviewed_at'];
    protected $dates = ['reviewed_at'];
    public $timestamps = false;

    protected static $logName = 'order';

    protected static $logAttributes = [ 
        'no',
        'address',
        'total_amount',
        'real_amount',
        'remark',
        'paid_at',
        'paid_no',
        'payment_status',
        'payment_method',
        'refund_status',
        'refund_no',
        'closed',
        'reviewed',
        'ship_status',
        'ship_data',
        'extra',
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

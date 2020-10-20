<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class CartItem extends Model
{
    use LogsActivity;

    protected $table = 'carts';
    protected $fillable = ['qty','amount'];

    protected static $logName = 'cart';
    protected static $logAttributes = ['productSku', 'qty', 'amount'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}

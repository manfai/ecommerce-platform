<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    protected $fillable = ['failed', 'ip_address', 'message', 'data', 'session', 'total'];
    protected $dates = ['reviewed_at'];

    protected $casts = [
        'failed'  => 'boolean', 
        'data'    => 'json', 
        'session' => 'json', 
    ];
    
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

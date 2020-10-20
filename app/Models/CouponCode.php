<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CouponCode extends Model
{
    // 用常量的方式定義支持的優惠券類型
    const TYPE_FIXED = 'fixed';
    const TYPE_PERCENT = 'percent';
    
    protected $table = 'coupons';

    public static $typeMap = [
        self::TYPE_FIXED   => '固定金額',
        self::TYPE_PERCENT => '比例',
    ];

    protected $appends = ['description'];

    protected $fillable = [
        'name',
        'code',
        'type',
        'value',
        'total',
        'used',
        'min_amount',
        'not_before',
        'not_after',
        'enabled',
    ];
    protected $casts = [
        'enabled' => 'boolean',
    ];
    // 指明這兩個字段是日期類型
    protected $dates = ['not_before', 'not_after'];

    public static function findAvailableCode($length = 16)
    {
        do {
            // 生成一個指定長度的隨機字符串，並轉成大寫
            $code = strtoupper(Str::random($length));
        // 如果生成的碼已存在就繼續循環
        } while (self::query()->where('code', $code)->exists());

        return $code;
    }


    public function getDescriptionAttribute()
    {
        $str = '';

        if ($this->min_amount > 0) {
            $str = '滿'.$this->min_amount;
        }
        if ($this->type === self::TYPE_PERCENT) {
            return $str.'優惠'.$this->value.'%';
        }

        return $str.'減'.$this->value;
    }

}

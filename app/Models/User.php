<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected static function boot()
    {
        parent::boot();
        // 监听模型创建事件，在写入数据库之前触发
        static::creating(function ($model) {
            // 如果模型的 no 字段为空
            if (!$model->code) {
                // 调用 findAvailableNo 生成订单流水号
                $model->code = static::findAvailableCode();
                // 如果生成失败，则终止创建订单
                if (!$model->code) {
                    return false;
                }
            }
        });
    }

    public static function findAvailableCode()
    {
        // 订单流水号前缀
        for ($i = 0; $i < 10; $i++) {
            // 随机生成 6 位的数字
            $code = str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            // 判断是否已经存在
            if (!static::query()->where('code', $code)->exists()) {
                return $code;
            }
        }
        \Log::warning('find user code failed');
        return false;
    }

    public function addresses()
    {
        return $this->hasMany(UserAddress::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function favoriteProducts()
    {
        return $this->belongsToMany(Product::class, 'user_favorite_products')
            ->withTimestamps()
            ->orderBy('user_favorite_products.created_at', 'desc');
    }

    public function payments()
    {
        return $this->hasMany(UserPayment::class);
    }
   
    public function pets()
    {
        return $this->belongsToMany(Pet::class, 'user_pets')
        ->withTimestamps()
        ->orderBy('user_pets.created_at', 'desc');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{

    public function getRouteKeyName()
    {
        return 'no';
    }

    protected $fillable = [
        'no',
        'title',
        'description',
        'name',
        'image',
        'gender',
        'dob',
        'breed',
        'remark',
        'status',
        'closed',
        'extra',
    ];

    protected $casts = [
        'closed'    => 'boolean',
        'remark'    => 'json',
        'extra'     => 'json',
    ];


    protected static function boot()
    {
        parent::boot();
        // 监听模型创建事件，在写入数据库之前触发
        static::creating(function ($model) {
            // 如果模型的 no 字段为空
            if (!$model->no) {
                // 调用 findAvailableNo 生成订单流水号
                $model->no = static::findAvailableNo();
                // 如果生成失败，则终止创建订单
                if (!$model->no) {
                    return false;
                }
            }
        });
    }
    public static function findAvailableNo()
        {
            // 订单流水号前缀
            $prefix = date('YmdHis');
            for ($i = 0; $i < 10; $i++) {
                // 随机生成 6 位的数字
                $no = $prefix.str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
                // 判断是否已经存在
                if (!static::query()->where('no', $no)->exists()) {
                    return $no;
                }
            }
            \Log::warning('find order no failed');

            return false;
        }
        
    public function getAgeAttribute()
    {
        return floor((time() - strtotime($this->dob)) / 31556926);
    }
    public function images()
    {
        return $this->hasMany(AdoptionUpload::class);
    }
        
}

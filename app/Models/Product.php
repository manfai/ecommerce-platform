<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use \Spatie\Tags\HasTags;

class Product extends Model
{
    use HasTags, HasTranslations;
    protected $fillable = [
        'code', 'title', 'description', 'image', 'on_sale', 
        'rating', 'sold_count', 'review_count', 'price', 'currency'
    ];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    public $translatable = ['title','description'];

    // 与商品SKU关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return Storage::disk('public')->url($this->attributes['image']);
    }

    public function getPriceAttribute()
    {
        $exchangeRates = new ExchangeRate();
        if (Auth::check()) {
            $userCurrency = Auth::user()->currency;
        } else {
            $userCurrency = Session::get('currency');
        }
        return number_format($exchangeRates->convert($this->attributes['price'], $this->attributes['currency'], $userCurrency), 0);
    }

}

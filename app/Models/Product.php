<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use \Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Laravel\Nova\Nova;

class Product extends Model
{
    use HasTags, HasTranslations, HasFactory;
    
    protected $fillable = [
        'code', 'title', 'description', 'image', 'on_sale', 
        'rating', 'sold_count', 'review_count', 'price', 'currency'
    ];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    public $translatable = ['title','description'];

    // 与商品SKU关联
    public static function getTagClassName(): string
    {
        return Tag::class;
    }

    public static function getCategoryClassName(): string
    {
        return Category::class;
    }

    public function categories(): MorphToMany
    {
        return $this
            ->morphToMany(self::getCategoryClassName(), 'categoryable', 'categoryables', null, 'category_id')
            ->orderBy('order_column');
    }

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
        return Storage::url('product/'.$this->attributes['image']);
    }

    public function getExchangedPriceAttribute()
    {
        $exchangeRates = new ExchangeRate();
        if (Auth::check()) {
            $userCurrency = Auth::user()->currency?Auth::user()->currency:'HKD';
        } else {
            $userCurrency = Session::get('currency');
        }
        return number_format($exchangeRates->convert($this->attributes['price'], $this->attributes['currency'], $userCurrency), 0);
    }

}

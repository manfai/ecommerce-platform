<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\InternalException;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Translatable\HasTranslations;

class ProductSku extends Model
{    
    
    use HasTranslations;

    protected $fillable = ['code', 'title', 'description', 'price', 'stock', 'image', 'meta', 'on_sale'];
    public $translatable = ['title','description'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getImageUrlAttribute()
    {
        if($this->attributes['image'] == NULL){
            return $this->product->image_url;
        }
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (\Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
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
    

    public function getPriceAttribute()
    {
        $exchangeRates = new ExchangeRate();
        if (Auth::check()) {
            $userCurrency = Auth::user()->currency;
        } else {
            $userCurrency = Session::get('currency');
        }
        // dd($this->product->currency);
        return number_format($exchangeRates->convert($this->attributes['price'], $this->product->currency, $userCurrency), 0);
    }
    
}

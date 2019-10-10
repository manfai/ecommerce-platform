<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ProductSku;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $step =  $this->input('step');
        $rules = [
            // 判斷用户提交的地址 ID 是否存在於數據庫並且屬於當前用户
            // 後面這個條件非常重要，否則惡意用户可以用不同的地址 ID 不斷提交訂單來遍歷出平台所有用户的收貨地址
        ];
        if($step == 'products'){
            $rules['items'] = ['required', 'array'];
            $rules['items.*.qty'] = ['required', 'integer', 'min:1'];
            $rules['items.*.sku_id'] = [ // 檢查 items 數組下每一個子數組的 sku_id 參數
                'required',
                function ($attribute, $value, $fail) {
                    if (!$sku = ProductSku::find($value)) {
                        return $fail('該商品不存在');
                    }
                    if (!$sku->product->on_sale) {
                        return $fail('該商品未上架');
                    }
                    if ($sku->stock === 0) {
                        return $fail('該商品已售完');
                    }
                    // 獲取當前索引
                    preg_match('/items\.(\d+)\.sku_id/', $attribute, $m);
                    $index = $m[1];
                    // 根據索引找到用户所提交的購買數量
                    $amount = $this->input('items')[$index]['qty'];
                    if ($amount > 0 && $amount > $sku->stock) {
                        return $fail('該商品庫存不足');
                    }
                },
            ];
        }
        if($step == 'addresses'){
            $rules['address_id'] = [
                'required',
                Rule::exists('user_addresses', 'id')->where('user_id', $this->user()->id),
            ];
        }
        return $rules;
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return ['items.*.sku_id'=>'asdjnaskjndkjas'];
    }
}

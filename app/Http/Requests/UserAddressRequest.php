<?php

namespace App\Http\Requests;

class UserAddressRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'country'       => 'required',
            'province'      => 'required',
            'city'          => 'required',
            'district'      => 'required',
            'address'       => 'required',
            'zip'           => 'required',
            'contact_name'  => 'required',
            'contact_phone' => 'required',
        ];
    }
    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'country'       => '國家',
            'province'      => '省',
            'city'          => '城市',
            'district'      => '地區',
            'address'       => '詳細地址',
            'zip'           => '郵編',
            'contact_name'  => '姓名',
            'contact_phone' => '電話',
        ];
    }
}

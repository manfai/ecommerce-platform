<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;

class UserAddressController extends Controller
{
    
    public function index()
    {
        return view('address.index',['addresses'=>UserAddress::all()]);
    }
    
    public function create()
    {
        return view('address.create', ['address' => new UserAddress()]);
    }

    public function store(UserAddressRequest $request)
    {
        $request->user()->addresses()->create($request->only([
            'country',
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('address');
    }

    public function edit(UserAddress $addressId)
    {
        $this->authorize('own', $addressId);
        return view('address.create', ['address' => $addressId]);
    }
    
    public function update(UserAddress $addressId, UserAddressRequest $request)
    {
        $this->authorize('own', $addressId);
        $addressId->update($request->only([
            'country',
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));
        return redirect()->route('address');
    }

    public function destroy(UserAddress $addressId)
    {
        $this->authorize('own', $addressId);
        $addressId->delete();
        return [
            'code'=>'100',
        ];
    }

}
